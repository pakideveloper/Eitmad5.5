<?php

use Illuminate\Database\Seeder;

class ProductSubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_sub_categories')->delete();
        
        \DB::table('product_sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sub_category_name' => 'Mobile',
                'product_category_id' => 1,
                'feature_names' => '["processor"]',
                'created_at' => '2018-09-17 19:09:40',
                'updated_at' => '2018-10-10 12:44:38',
            ),
            1 => 
            array (
                'id' => 2,
                'sub_category_name' => 'Laptop',
                'product_category_id' => 1,
                'feature_names' => '["proccessor","Hard disk","ram","battery"]',
                'created_at' => '2018-09-17 19:11:13',
                'updated_at' => '2018-09-17 19:11:13',
            ),
            2 => 
            array (
                'id' => 3,
                'sub_category_name' => 'cameras',
                'product_category_id' => 1,
                'feature_names' => '["resolution","SKU","Removable Memory Card","Anti-Shake","Burst Mode","Touch Screen","Wireless Remote","Wireless Connectivity"]',
                'created_at' => '2018-09-26 21:02:53',
                'updated_at' => '2018-09-26 21:02:53',
            ),
            3 => 
            array (
                'id' => 4,
                'sub_category_name' => 'tv',
                'product_category_id' => 1,
                'feature_names' => '["model no","screen size","android feature"]',
                'created_at' => '2018-09-30 11:55:36',
                'updated_at' => '2018-09-30 11:55:36',
            ),
        ));
        
        
    }
}