<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\SSHFactionControllers;
use App\SSHLoggerModel;
use App\Http\Controllers\SSHRouteHandler;
use App\SSH_UsersModel;


class Controller extends BaseController
{
    public $SSHFaction,$SSHUserModel,$SSHRouteHandler;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->SSHFaction = new SSHFactionControllers();
        $this->SSHUserModel = new SSH_UsersModel();
        $this->SSHRouteHandler = new SSHRouteHandler();
    }
}
