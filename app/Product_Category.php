<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
     protected $table = 'product_categories';
    // protected $fillable = [
    //     'category_name'
    // ];

 	public function sub_categories(){
		return $this->hasMany('App\Product_Sub_Category','product_category_id', 'id');
	}
}
