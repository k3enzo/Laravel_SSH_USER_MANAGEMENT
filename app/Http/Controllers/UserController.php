<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\SSH_UsersModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:view-user')->except(['profile', 'profileUpdate']);
        $this->middleware('permission:create-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:update-user', ['only' => ['edit', 'update']]);
        $this->middleware('permission:destroy-user', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $users = User::where('name', 'like', '%' . $request->search . '%')->paginate(setting('record_per_page', 15));
        } else {
            $users = User::paginate(setting('record_per_page', 15));
        }
        $title = 'Manage Users';
        return view('users.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create user';
        $roles = Role::pluck('name', 'id');

        return view('users.create', compact('roles', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $userData = $request->except(['role', 'profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }

        $GetUserForSSH = explode('@', $userData['email']);
        $UserFixed = $GetUserForSSH[0];

        if (env('SYSTEM_CONFIR_USERCREATE_CHECK_USERNAME') == 1) {
            $CheckHasUserInSSH = User::where('email', 'like', $UserFixed . '%')->first();
            if (!empty($CheckHasUserInSSH->id)) {
                flash(" نام کاربر $UserFixed در سرور موجود میباشد ")->error();
                return redirect()->route('users.create');
            }
        }

        $user = User::create($userData);
        $user->assignRole($request->role);

        // ------------ Create User In SSH -------------
            SSHFactionControllers::CreateUserInServerAndSSH($UserFixed,$userData,$request->ip());
        // ------------ End Of Create SSH User -----------

        flash('کاربر مورد نظر با موفقیت در سیستم ثبت شد')->success();
        return redirect()->route('users.index');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $title = "User Details";
        $roles = Role::pluck('name', 'id');
        return view('users.show', compact('user', 'title', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $title = "User Details";
        $roles = Role::pluck('name', 'id');

        $SSHUser = SSH_UsersModel::where('username',userByEmail($user->email))->first();
        return view('users.edit', compact('user', 'title', 'roles','SSHUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {

        $userData = $request->except(['role', 'profile_photo']);
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        $user->update($userData);
        $user->syncRoles($request->role);

        $FixUsername = explode('@',$user->email)[0];
        $LastDataUser = SSH_UsersModel::where('username',$FixUsername)->first();

        if (!empty($request->post('password'))){
            if ($request->post('password') != $LastDataUser->password){
                SSHFactionControllers::EditUserPasswordInServerAndSSH($FixUsername,$request->post('password'));
            }
        }

        if (!empty($request->post('expiredate'))){
            if (strlen($request->post('expire')))
            $newdate = getExpireByDate($request->post('expiredate'));
            if ($newdate != $LastDataUser->expiredate){
                SSHFactionControllers::EditUserExpireDateInServerAndSSH($FixUsername,$request->post('expiredate'));
            }
        }

        flash('User updated successfully!')->success();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->id == Auth::user()->id || $user->id == 1) {
            flash('You can not delete logged in user!')->warning();
            return back();
        }
        $user->delete();

        SSH_DelUser(explode('@', $user->email)[0]);

        flash('User deleted successfully!')->info();
        return back();

    }


    public function profile(User $user)
    {
        $title = 'Edit Profile';
        return view('users.profile', compact('title', 'user'));
    }

    public function profileUpdate(UserUpdateRequest $request, User $user)
    {
        $userData = $request->except('profile_photo');
        if ($request->profile_photo) {
            $userData['profile_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }

        $user->update($userData);
        flash('Profile updated successfully!')->success();
        return back();
    }
}
