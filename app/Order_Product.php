<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    protected $table = 'order_products';
    public function product(){
    	return $this->hasOne('App\Product', 'id', 'product_id');
    }
    
    public function order(){
    	return $this->hasOne('App\Order', 'id', 'order_id');
    }
    public function users(){
    	return $this->hasMany('App\User');
    }

}
