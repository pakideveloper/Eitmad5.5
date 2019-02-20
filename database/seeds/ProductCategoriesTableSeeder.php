<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_name' => 'Electronics',
                'created_at' => '2018-09-17 19:05:09',
                'updated_at' => '2018-09-17 19:05:09',
            ),
            1 => 
            array (
                'id' => 2,
                'category_name' => 'Sports',
                'created_at' => '2018-09-17 19:06:25',
                'updated_at' => '2018-09-17 19:06:25',
            ),
            2 => 
            array (
                'id' => 3,
                'category_name' => 'Clothes',
                'created_at' => '2018-09-17 19:06:32',
                'updated_at' => '2018-09-17 19:06:32',
            ),
        ));
        
        
    }
}