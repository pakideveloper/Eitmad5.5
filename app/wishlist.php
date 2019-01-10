<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    //
    protected $table = 'users_wishlists_products';

    public function product()
    {
    	// echo "string";
    	// die();
        return $this->hasOne('App\Product','id','product_id');
    }
}
