<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_SubCategory extends Model
{
    protected $table = 'job_sub_categories';

     public function category()
    {
    	return $this->hasOne('App\Job_Category','id','job_category_id');
    }
}
