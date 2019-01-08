<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    const city_name='';
    const country_name='';
    const job_type_name='';
    const job_category='';
    const job_subcateory='';
    const DegreeLevel='';
    const DegreeType='';
    const creation_date='';
    const applyby_date='';
    const applications='';

     public function city()
    {
    	return $this->hasOne('App\City','id','city_id');
    }

    public function subcategory()
    {
    	return $this->hasOne('App\Job_SubCategory','id','job_sub_category_id');
    }

     public function jobtype()
    {
    	return $this->hasOne('App\Job_Type','id','job_type_id');
    }

    public function degreelevel()
    {
    	return $this->hasOne('App\DegreeLevel','id','degree_level_id');
    }

    public function degreetype()
    {
    	return $this->hasOne('App\DegreeType','id','degree_type_id');
    }
}
