<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SSH_UsersModel;
use App\SSHLoggerModel;
use App\User;
use Illuminate\Http\Request;

class SSHRouteHandler extends Controller
{
    private $user,$sshuser,$logger;

    public function __construct()
    {
        $this->user = new User();
        $this->sshuser = new SSH_UsersModel();
        $this->logger = new SSHLoggerModel();
        $this->SSHFaction = new SSHFactionControllers();
    }

    function kill($username){
        $Progress = $this->SSHFaction->killSSHUser($username);
        $MsgMode = $Progress[0];
        $MsgText = $Progress[1];
        flash($MsgText)->$MsgMode();
        return redirect()->back();
    }

    function ban($username){
        $Progress = $this->SSHFaction->banSSHUsers($username);
        $MsgMode = $Progress[1];
        $MsgText = $Progress[0];
        flash($MsgText)->$MsgMode();
        return redirect()->back();
    }
    function unban($username){

    }
    function remove($username){

    }


    function CreateUser(Request $request){
        $this->validate($request,[
           'username'=>'required',
           'password'=>'required',
        ],[
            'username.required'=>'نام کاربری اجباری میباشد',
            'password.required'=>'کلمه ی عبور اجباری میباشد'
        ]);
        $date = null;
        if (!empty($request->post('date'))){
            if(!ctype_digit($request->post('date'))){
                flash('تاریخ باید بصورت عددی و تعداد ماه باشد , مثال : (2) یعنی 2 ماه');
                return redirect()->back();
            }
            $date = intval($request->post('date'));
        }

        $ip = ClientIp();

        $Progress = $this->SSHFaction->FullCreateUser($request->post('username'),$request->post('password'),$date,$ip);

        if (!$Progress){
            flash('مشکلی در اتصال شما با سرور رخ داده است در هنگام اجرای درخواست')->error();
            return redirect()->back();
        }

        $MsgMode = $Progress[0];
        $MsgTest = $Progress[1];

        flash($MsgTest)->$MsgMode();
        return redirect()->back();

    }

    function GetActivitySShLogModal($id){
        $GetActivity = $this->SSHFaction->ActivitySSHLog($id);
        if (!$GetActivity){
            return response()->json(['error'=>'داده های وارد شده معتبر نمیباشد'])->setStatusCode(300);
        }
        return response()->json(['data'=>$GetActivity])->setStatusCode(200);
    }
}
