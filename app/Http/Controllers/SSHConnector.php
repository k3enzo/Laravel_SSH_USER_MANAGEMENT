<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;

class SSHConnector extends Controller
{

    private $host;

    private $user;

    private $pass;

    private $port;

    public $conn = false;

    private $error;

    private $stream;

    private $stream_timeout = 2;

    private $log;

    private $lastLog;

    public function __construct()
    {
        $this->host = env('SSH_HOST');
        $this->user = env('SSH_USER');
        $this->pass = env('SSH_PASS');
        $this->port = env('SSH_PORT');
        $this->Log = env('SSH_LOG');

        if ($this->connect()->authenticate()) {
            return true;
        }
    }

    public function logAction($logs)
    {
        $this->log .= '\r\n' . $logs;
    }

    public function isConnected()
    {
        return ( boolean )$this->conn;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function connect()
    {
        $this->logAction("Connecting to {$this->host}");

        if ($this->conn = new SSH2($this->host, $this->port)) {
            return $this;
        }
        $this->logAction("Connection to {$this->host} failed");
        throw new Exception ("Unable to connect to {$this->host}");
    }

    public function authenticate()
    {
        $this->logAction("Authenticating to {$this->host}");

        if ($this->conn->login($this->user, $this->pass)) {
            return $this;
        }
        $this->logAction("Authentication to {$this->host} failed");
        throw new Exception ("Unable to authenticate to {$this->host}");
    }


   public function WritePassUser($user,$passUser, $returnOutput = false){

        if (!$this->isConnected()){
            $this->connect()->authenticate();
        }
       $this->logAction("Executing command passwd ".$user);
       $ssh = $this->conn;
       $ssh->enablePTY();$ssh->setTimeout(3);
       $ssh->exec('passwd '.$user);
       $ssh->setTimeout(3);
       $ssh->read('password:'); $ssh->write("$passUser\n");
       $ssh->read('password:'); $ssh->write("$passUser\n");
       $this->stream = $ssh->read();
        $this->lastLog = $this->stream;
       return ($returnOutput) ? $this->lastLog : $this;
   }

   public function read($cmd, $returnOutput = false,$write=null){
        if (!$this->isConnected()){
            $this->connect()->authenticate();
        }
       $this->logAction("Executing command $cmd");

       $this->stream = $this->conn->read($cmd);
       if (!empty($write)){
           $this->conn->write($write);
       }
       $this->StreamWrite($cmd);
       return ($returnOutput) ? $this->lastLog : $this;
   }

   public function cmd($cmd, $returnOutput = false)
    {
        $this->logAction("Executing command $cmd");

        $this->stream = $this->conn->exec($cmd);
        $this->conn->setTimeout(3);
        if (!empty($write)){
            $this->conn->write($write);
        }
        $this->StreamWrite($cmd);
        return ($returnOutput) ? $this->lastLog : $this;
    }

    public function shellCmd($cmds = array())
    {
        $this->logAction("Openning ssh2 shell");

        foreach ($cmds as $row) {
            $this->cmd($row);
            $this->logAction('Command : {' . $row . '} Runned ' . PHP_EOL);
            $this->lastLog = $this->stream;
            sleep(1);
        }

        return $this;
    }


    private function StreamWrite($cmd)
    {
        if (FALSE === $this->stream) {
            $this->logAction("Unable to execute command $cmd");
            throw new Exception ("Unable to execute command '$cmd'");
        }
        $this->logAction("$cmd was executed");
        $this->lastLog = $this->stream;
        $this->logAction("$cmd output: {$this->lastLog}");
        $this->log .= $this->lastLog . "\n";
    }

    public function getLastLog()
    {
        return $this->lastLog;
    }

    public function getLog()
    {
        return $this->log;
    }

    public function disconnect()
    {
        $this->logAction("Disconnecting from {$this->host}");
        if ($this->conn) {
            $this->conn->disconnect();
        } else {
            @fclose($this->conn);
            $this->conn = false;
        }
        return NULL;
    }

}

