<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable=['name','display_name','description'];
    /*
    public function role_users(){
    	return $this->hasMany('App\Role_User');
    }*/
}
