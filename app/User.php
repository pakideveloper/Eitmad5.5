<?php

namespace App;
use DB;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','provider','provider_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getRoleAttribute()
    {
        $role = DB::table('users')
        ->join('role_user','users.id', '=' , 'role_user.user_id')
        ->join('roles','roles.id', '=' , 'role_user.role_id')
        ->where('users.id', '=' , Auth::user()->id )
        ->select('roles.name','roles.display_name','roles.id')
        ->first();
        return $role;
    }
    public function getRoleForAny($id)
    {
        $role = DB::table('users')
        ->join('role_user','users.id', '=' , 'role_user.user_id')
        ->join('roles','roles.id', '=' , 'role_user.role_id')
        ->where('users.id', '=' , $id )
        ->select('roles.name','roles.display_name','roles.id')
        ->first();
        return $role;
    }
    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
}
