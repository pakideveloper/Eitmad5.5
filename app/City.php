<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function region()
    {
    	return $this->hasOne('App\Region','id', 'region_id');
    } 
    public function country()
    {
    	return $this->hasOne('App\country','id', 'country_id');
    }  
}
