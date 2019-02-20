<?php

use Illuminate\Database\Seeder;

class UsersWishlistsProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_wishlists_products')->delete();
        
        
        
    }
}