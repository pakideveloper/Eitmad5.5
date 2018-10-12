<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function city()
    {
    	return $this->hasOne('App\City','id', 'city_id');
    }  

    public function industry()
    {
    	return $this->hasOne('App\Industry','id', 'industry_id');
    }  

     public function ceo()
    {
    	return $this->hasOne('App\CEO_Info','id', 'company_ceo_id');
    }  

   
}
