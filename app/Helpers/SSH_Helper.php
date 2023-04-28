<?php

use App\Http\Controllers\SSHConnector;
use phpseclib3\Net\SSH2;
use Illuminate\Support\Facades\Auth;
use App\SSHLoggerModel;
use App\User;

defined('DefaultUsers')
|| define('DefaultUsers', [
    'syslog'
]);

function ClientIp()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

function APTUPDATE($SSH)
{

    if ($SSH->isConnected()) {
        $SSH->cmd("apt-get update -y && apt-get upgrade -y");
        sleep(2);
    }
    return true;
}

function SSHINTRO()
{
    $SSH = new SSHConnector();

    if (!$SSH->isConnected())
        return false;

    return $SSH;
}

function SetLogSSH($title, $command, $output = null, $variables = null)
{
    $Ssh_Logger_model = new SSHLoggerModel();
    $Ssh_Logger_model->create([
        'title' => $title,
        'command' => $command,
        'output' => $output,
        'variables' => $variables,
        'commandByIp' => ClientIp(),
        'user' => Auth::user()->id
    ]);
}

function SSH_OnlineUsers() :array
{
    $SSH = SSHINTRO();

    $out = $SSH->cmd('lsof -i -n -P | grep :56777 | grep ESTABLISHED | grep -v " root " | sort -r -k 3', true);

    if (!$out)
        return [];

    SetLogSSH('lsof -i -n -P | grep :56777 | grep ESTABLISHED | grep -v " root " | sort -r -k 3', $out, $out);
//    SetLogSSH('get Online Users Ip',"sudo netstat -tnpa | grep -w '185.81.114.11:56777' | grep 'ESTABLISHED' | awk '{print $8}' | awk -F: '{print $1}' | sort | uniq -c | awk '{print $2,$1}'", $out,'');

    $StringWithCode = urlencode($out);

    $StringFixCode = str_replace(['%0A'], [' '], $StringWithCode);

    $fixedString = urldecode($StringFixCode);
    $fixedString = explode(' (ESTABLISHED)', $fixedString);

    $usersByConnected = [];

    foreach ($fixedString as $row) {
        if (!empty($row)) {
            $splited = explode('      0t0  TCP 185.81.114.11:56777->', $row);
            if (!empty($splited[1])) {
                $connected = $splited[1];
                $username = explode('    4u  IPv4 ', $splited[0]);
                $username = str_replace('sshd      ','',$username[0]);
                $username = explode('        ',$username);
                $usersByConnected[] = ['username' => @str_replace(' ','',$username[1]), 'connected' => $connected];
            }
        }
    }

    $SSH->disconnect();
    return $usersByConnected;
}


function SSH_Users()
{
    $SSH = SSHINTRO();

    $pas = $SSH->cmd('cat /etc/passwd', true);

    SetLogSSH('get All Users', 'cat /etc/passwd', $pas);

    $getLines = preg_split('/\r\n|\r|\n/', $pas);
    $fixUsers = [];
    foreach ($getLines as $row) {
        $IfPos = strpos($row, '/home/');
        if ($IfPos == true) {
            $fixUsers[] = $row;
        }
    }

    $Users = [];
    foreach ($fixUsers as $UserReal) {
        $Users[] = explode(':x', $UserReal)[0];
    }

    $SSH->disconnect();

    return $Users;
}

function SSH_Create_User($userName)
{
    $SSH = SSHINTRO();
    APTUPDATE($SSH);

    $CreatedUser = $SSH->cmd("adduser " . $userName . " --shell=/bin/fake", true);

    SetLogSSH('create Username', "adduser " . $userName . " --shell=/bin/fake", $CreatedUser, 'username');

    if (!$CreatedUser) {
        $SSH->disconnect();
        return false;
    }

    $SSH->disconnect();
    return true;
}

function SSH_SetUserPassword($user, $pass)
{
    $SSH = SSHINTRO();

    $Response = $SSH->WritePassUser($user, $pass, true);

    SetLogSSH('set Password To User', "Executing command passwd " . $user . " | return pass " . $pass, $Response, 'username,password');
    if ($Response and strpos($Response, 'successfully') == true) {
        $SSH->disconnect();
        return true;
    }

    $SSH->disconnect();
    return false;
}

function SSH_DelUser($username)
{
    $GetUsers = SSH_Users();

    if (!in_array($username, $GetUsers)) {
        return 'User Not In';
    }
    $SSH = SSHINTRO();

    SetLogSSH('delete user', 'deluser ' . $username, 'empty', 'username');


    $Deleted = $SSH->cmd('deluser ' . $username, true);

    if ($Deleted) {
        $SSH->disconnect();
        return true;
    }

    $SSH->disconnect();
    return false;

}

function SSH_SetUserExpireDate($username, $date)
{
    $SSH = SSHINTRO();
    APTUPDATE($SSH);
    sleep(4);
    if (!$SSH->isConnected())
        return 'Disconnected ';


    if (!empty($date)) {
        if (DateTime::createFromFormat('Y-m-d', $date) !== false) {
            $SetDateExpire = $SSH->cmd("chage -E " . $date . " " . $username, true);

            SetLogSSH('Set User Expire Date', "chage -E " . $date . " " . $username, $SetDateExpire, ' username,expireDate');

            if (!$SetDateExpire) {
                $SSH->disconnect();
                return false;
            }
            return $SetDateExpire;
        }
        return 'Date Is Not valid';
    }

    return 'Date is empty';
}


function SSH_SignOutUser($username)
{
    $SSH = SSHINTRO();

    $SignedOut = $SSH->cmd('pkill -KILL -u ' . $username, true);

    SetLogSSH('Log Out A online User', 'pkill -KILL -u ' . $username, $SignedOut, 'username');

    $SSH->disconnect();
    return true;
}

function SSH_BanUser($username)
{
    $SSH = SSHINTRO();

    $Reponse = $SSH->cmd('usermod -L ' . $username);

    SetLogSSH('Ban User', 'usermod -L ' . $username, '', 'username');

    if (!$Reponse) {
        $SSH->disconnect();
        return 'Error In Ban';
    }

    $SSH->disconnect();
    return true;
}
function usersIpUpdate($username,$ip){
    $FindUser = \App\SSH_UsersModel::where('username',$username)->first();
    $UpdateSSh = $FindUser->update([
       'ip'=>$ip
    ]);
    if ($UpdateSSh){
        SetLogSSH('Updated User ip', 'No Command : username = '.$username.' | Ip = '.$ip.'  +Updated', 'table update');
        return User::where('ssh_id',$FindUser->id)->update([
           'ip'=>$ip
        ]);
    }
    return false;
}

function CpuUsage(){
    $SSH = SSHINTRO();
    $Response = $SSH->cmd('mpstat -P ALL',true);
    $SSH->disconnect();



    // Set To Get Line Character and Replace With \n For explode lines As Array
    $encode = urlencode($Response);
    $SplitLines = str_replace('%0A',PHP_EOL,$encode);
    $decode = urldecode($SplitLines);
    $exp = explode(PHP_EOL,$decode);

    $Header = $exp[0];

     unset($exp[0]);
     unset($exp[1]);



    $FixAllData = [];
    foreach ($exp as $row){
        if (!empty($row)){
            $FixAllData[] = explode('    ',$row);
        }
    }

    $i=0;
    $keeper = [];

    array_shift($FixAllData);
    foreach ($FixAllData as $row){
        foreach ($row as $column){
            $check = explode('  ',$column);
            if (!empty($check[1])){
                $keeper[$i][] = $check[0];
                $keeper[$i][] = $check[1];
            }else{
                $keeper[$i][] = $column;
            }
        }
        $i++;
    }

    return $keeper;
}



function getExpireByDate($expiredate){
    return date('Y-m-d', strtotime("+" . intval($expiredate) . " month", strtotime(date('Y-m-d'))));
}

function userByEmail($email){
    if (strpos($email,'@') == false)
        return $email;

    return explode('@',$email)[0];
}





