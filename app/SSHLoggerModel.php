<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SSHLoggerModel extends Model
{
    protected $table = 'SSH_Logger';
    protected $fillable = [
        'id','title','command','output','variables','user','commandByIp'
    ];

    public function User(){
        return $this->hasOne('App\User','id','user');
    }
}
