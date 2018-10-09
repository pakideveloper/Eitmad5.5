<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    public function city()
    {
    	return $this->hasOne('App\City','id','city_id');
    }
}
