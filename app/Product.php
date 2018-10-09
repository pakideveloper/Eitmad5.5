<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function category(){
    	return $this->hasOne('App\Product_Sub_Category', 'id', 'sub_category_id');
    }
    public function discount(){
    	return $this->hasOne('App\Discount', 'id', 'discount_id');
    }
    public function brand(){
    	return $this->hasOne('App\Brand', 'id', 'brand_id');
    }
    public function files(){
        return $this->hasMany('App\Product_File');
    }
    public function title_image(){
        return $this->hasOne('App\Product_File','id', 'title_img_id');
    }
}
