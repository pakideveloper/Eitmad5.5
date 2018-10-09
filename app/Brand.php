<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function category_assoc(){
		return $this->hasMany('App\Brand_Sub_Category_Assoc');
	}
}
