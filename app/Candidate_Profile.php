<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_Profile extends Model
{
    protected $table = 'candidate_profiles';
    public function profileId(){
    	return $this->hasOne('App\User', 'id', 'id');
    }

    public function educational_profiles(){
    	return $this->hasMany('App\Candidate_Educational_Profile', 'candidate_profile_id', 'id');
    }
}
