<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-role');
        $this->middleware('permission:create-role', ['only' => ['create','store']]);
        $this->middleware('permission:update-role', ['only' => ['edit','update']]);
        $this->middleware('permission:destroy-role', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        activity('role')
            ->causedBy(Auth::user())
            ->log('view');
        $title = 'Manage Roles';
        $roles = Role::paginate(setting('record_per_page', 15));
        return view('roles.index', compact('roles','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        activity('role')
            ->causedBy(Auth::user())
            ->log('create');
        $title = 'Create role';
        $permissions = Permission::pluck('name', 'id');
        return view('roles.create', compact('permissions','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);

        activity('role')
            ->causedBy(Auth::user())
            ->log('created');
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        flash('Role created successfully!')->success();
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {

        activity('role')
            ->causedBy(Auth::user())
            ->log('Edit');
        $title = 'Edit role';
        $permissions = Permission::pluck('name', 'id');
        return view('roles.edit', compact('permissions', 'role', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id.'|max:255',
        ]);

        activity('role')
            ->causedBy(Auth::user())
            ->log('updated');
        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        flash('Role updated successfully!')->success();
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if ($role->id ==1 || $role->name == 'super-admin') {
            flash('Super admin role can not be deleted!')->warning();
            return back();
        }

        activity('role')
            ->causedBy(Auth::user())
            ->log('destroy');
        $role->delete();
        flash('Role deleted successfully!')->info();
        return back();
    }
}
