<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Sub_Category extends Model
{
    protected $table = 'product_sub_categories';  


    public function parent()
    {
    	return $this->hasOne('App\Product_Category','id', 'product_category_id');
    }  
}
