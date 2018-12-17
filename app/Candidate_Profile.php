<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_Profile extends Model
{
    protected $table = 'candidate_profiles';
    public function profileId(){
    	return $this->hasOne('App\User', 'id', 'candidate_id');
    }
}
