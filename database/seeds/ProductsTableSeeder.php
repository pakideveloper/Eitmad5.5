<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 8,
                'product_name' => 'HTC',
                'product_description' => 'its a mobile',
                'product_size' => '5.5',
                'product_colour' => '40000',
                'product_price' => 40000,
                'product_quantity' => '5',
                'product_discounted_price' => '35600',
                'sub_category_id' => 1,
                'brand_id' => 12,
                'discount_id' => 1,
                'title_img_id' => 6,
                'other_features' => '{"processor":"2.2 GHZ"}',
                'slug' => 'HTC',
                'added_by_user' => NULL,
                'user_type' => NULL,
                'product_type' => NULL,
                'created_at' => '2018-10-23 05:22:12',
                'updated_at' => '2018-10-31 07:02:14',
            ),
            1 => 
            array (
                'id' => 9,
                'product_name' => 'test',
                'product_description' => 'testing',
                'product_size' => '6',
                'product_colour' => 'black',
                'product_price' => 30000,
                'product_quantity' => '10',
                'product_discounted_price' => '26700',
                'sub_category_id' => 1,
                'brand_id' => 12,
                'discount_id' => 1,
                'title_img_id' => 7,
                'other_features' => '{"processor":"2.5"}',
                'slug' => 'test',
                'added_by_user' => NULL,
                'user_type' => NULL,
                'product_type' => NULL,
                'created_at' => '2018-11-06 11:50:09',
                'updated_at' => '2018-11-06 11:50:09',
            ),
        ));
        
        
    }
}