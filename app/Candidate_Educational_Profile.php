<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_Educational_Profile extends Model
{
    protected  $table = 'candidate_educational_profiles';

    public function degreetype(){
    	return $this->hasOne('App\DegreeType', 'id', 'degree_type_id');
    }
}
