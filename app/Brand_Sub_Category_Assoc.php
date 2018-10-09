<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand_Sub_Category_Assoc extends Model
{
    protected $table = 'brand_subcategory_assoc'; 
    public function category(){
    	return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
