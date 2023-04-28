<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SSH_UsersModel;
use App\SSHLoggerModel;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\SSHConnector;
use Illuminate\Support\Facades\Hash;

class SSHFactionControllers extends SSHConnector
{
    function Import_UsersTo_SSHTable(){
        $getUsers = new SSH_UsersModel();
        $SSHUsers = SSH_Users();

        foreach ($SSHUsers as $row){
            $User = $row;
            $ifHasUser = $getUsers->where('username',$User)->first();
            if (empty($ifHasUser->id)){
                $getUsers->create([
                   'username'=>$User,
                    'ip'=>'::1',
                    'status'=>1,
                    'expiredate'=>date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d')))),
                ]);
            }
        }
    }


    function Sync_SSHUsersTo_Users(){
        $SSHUsers = new SSH_UsersModel();
        $User = new User();

        foreach ($SSHUsers::all() as $row){
           $ifHasUser = $User->where('email','like','%'.$row->username.'%')->first();
           if (empty($ifHasUser->id)){

               $passwordColumn =  !empty($row->password)?$row->password : env('SSH_PasswordDefaultUser');

               $User = new User();
               $User->name = $row->username;
               $User->email = $row->username.env('SSH_EmailPostFixUser');
               $User->setPasswordAttribute($passwordColumn);
               $User->setStatusAttribute(1);
               $User->email_verified_at = date("Y-m-d H:i:s", strtotime("+1 month", strtotime(date('Y-m-d H:i:s'))));
               $User->ssh_id = $row->id;
               $User->save();
           }
        }
    }

    function UpdateAllUserIps(){
        foreach(SSH_OnlineUsers() as $row){
            if(!empty($UserDetail->id)){
                usersIpUpdate($row['username'],$row['connected']);
            }
        }
    }

    function killSSHUser($username){
        $user = new User();
        $HasUser = $user->where('email','like',$username.'%')->first();
        if (empty($HasUser->id))
            return ['error','کاربر مورد نظر در سیستم یافت نشد'];

        if ($HasUser->status == 0)
            return ['error','کاربر مورد نظر مسدود میباشد'];

        SSH_SignOutUser($username);
        return ['success','کاربر مورد نظر با موفقیت از سیستم اخراج شد'];
    }

    function banSSHUsers($user){
        $userModel = new User();
        if (!empty(SSH_UsersModel::where('username',$user)->first()->id)){
            $isUserInTable = $userModel::where('email','like',$user.'%')->first();
            if (!empty($isUserInTable->id)){
                if ($isUserInTable->status == 0)
                    return ['error','این کاربر قبلا مسدود سازی شده است'];

                SSH_BanUser($user);

                $isUserInTable->where([
                   'status'=>0
                ]);
                SSH_UsersModel::where('username',$user)->update([
                   'status'=>0
                ]);

                return ['success',' کاربر '.$userModel.' از سیستم اخراج و حساب کاربری مسدود گردید. '];
            }
            return ['error','کاربر مورد نظر در سیستم یافت نشد'];
        }
        return ['error','کاربر مورد نظر یافت نشد'];
    }

    static public function EditUserExpireDateInServerAndSSH($username,$ExpireDateChange){
        $expireDate = date('Y-m-d', strtotime("+" . intval($ExpireDateChange) . " month", strtotime(date('Y-m-d'))));
        SSH_SetUserExpireDate($username, $expireDate);
        SSH_UsersModel::where('username',$username)->update([
            'expiredate'=>$expireDate
        ]);
        return true;
    }

    static public function EditUserPasswordInServerAndSSH($Username,$password){
            SSH_SetUserPassword($Username, $password);
            SSH_UsersModel::where('username', $Username)->update([
                'password' => $password
            ]);
            return true;
    }
    static public function CreateUserInServerAndSSH($UserFixed,$userData,$ip=null){
        SSH_Create_User($UserFixed);
        SSH_SetUserPassword($UserFixed, $userData['password']);
        if (isset($userData['expiredate']) and !empty($userData['expiredate'])) {
            $expireDate = date('Y-m-d', strtotime("+" . intval($userData['expiredate']) . " month", strtotime(date('Y-m-d'))));
            SSH_SetUserExpireDate($UserFixed, $expireDate);
        } else {
            $expireDate = date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d'))));
            SSH_SetUserExpireDate($UserFixed,$expireDate );
        }

        SSH_UsersModel::create([
            'username'=>$UserFixed,
            'password'=>$userData['password'],
            'ip'=>$ip,
            'status'=>1,
            'expiredate'=>intval($userData['expiredate'])
        ]);
    }

    public function FullCreateUser($username,$password,$date=null,$ip='::1',$needSyncUser=true){
        $userSSH = new SSH_UsersModel();

        $hasUser = $userSSH->where('username',$username)->first();
        if (!empty($hasUser))
            return ['error','نام کاربری وارد شده تکراری میباشد'];


        if (!SSH_Create_User($username))
            return ['error','مشکلی در هنگام ایجاد کاربر جدید اتفاق افتاده لطفا دوباره امتحان کنید'];

        SSH_SetUserPassword($username,$password);
        if (isset($date) and !empty($date)) {
            $date = date("Y-m-d", strtotime("+".$date." month", strtotime(date('Y-m-d'))));
            SSH_SetUserExpireDate($username,$date);
        }else {
            $date = date("Y-m-d", strtotime("+1 month", strtotime(date('Y-m-d'))));
            SSH_SetUserExpireDate($username,$date);
        }
        if ($ip == '::1'){
            $ip = ClientIp();
        }

        $SSHUser = $userSSH->create([
           'username'=>$username,
           'password'=>$password,
           'ip'=>$ip,
            'status'=>1,
            'expiredate'=>$date
        ]);


        if($SSHUser and $needSyncUser){
            $this->Sync_SSHUsersTo_Users();
        }

        return ['success','کاربر مورد نظر با موفقیت ایجاد شد'];
    }


    function ActivitySSHLog($id){
        $id = intval($id);
        $getModal = SSHLoggerModel::where('id',$id)->with('User')->first();

        if (empty($getModal->id))
            return false;

        return $getModal;
    }


}
