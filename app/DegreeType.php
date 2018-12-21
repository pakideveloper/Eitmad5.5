<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DegreeType extends Model
{
    protected  $table = 'degree_types';
	
     public function degreelevel(){
    	return $this->hasOne('App\DegreeLevel', 'id', 'degree_level_id');
    }
}
