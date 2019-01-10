<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand_Sub_Category_Assoc extends Model
{
    protected $table = 'brand_subcategory_assoc'; 
    public function category(){
    	return $this->hasOne('App\Product_Category', 'id', 'sub_category_id');
    }
}
