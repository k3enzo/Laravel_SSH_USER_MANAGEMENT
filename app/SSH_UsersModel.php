<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SSH_UsersModel extends Model
{

    protected $table = 'ssh_users';
    protected $fillable = [
        'username', 'password', 'ip', 'status', 'expiredate'
    ];

    use SoftDeletes;



    public function UpdateUserIp($id, $ip)
    {
        $updated = $this->where('id', intval($id))->update([
            'ip' => $ip
        ]);

        return $updated ? true : false;
    }
}
