<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    protected $table = 'role_user';

    public function user(){
    	return $this->hasOne('App\User');
    }
}
