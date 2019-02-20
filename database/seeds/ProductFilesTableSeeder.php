<?php

use Illuminate\Database\Seeder;

class ProductFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_files')->delete();
        
        \DB::table('product_files')->insert(array (
            0 => 
            array (
                'id' => 6,
                'product_file_name' => '5bceb0042e8242_HomeIconVillas1024x600-01.jpg',
                'product_file_size' => '468.845 kb',
                'product_file_extension' => 'jpg',
                'product_id' => 8,
                'created_at' => '2018-10-23 05:22:12',
                'updated_at' => '2018-10-23 05:22:12',
            ),
            1 => 
            array (
                'id' => 7,
                'product_file_name' => '5be17ff19c97069.jpg',
                'product_file_size' => '214.215 kb',
                'product_file_extension' => 'jpg',
                'product_id' => 9,
                'created_at' => '2018-11-06 11:50:09',
                'updated_at' => '2018-11-06 11:50:09',
            ),
            2 => 
            array (
                'id' => 8,
                'product_file_name' => '5be17ff1c549c5_SliderIconVillas1024x600-03.jpg',
                'product_file_size' => '404.501 kb',
                'product_file_extension' => 'jpg',
                'product_id' => 9,
                'created_at' => '2018-11-06 11:50:09',
                'updated_at' => '2018-11-06 11:50:09',
            ),
        ));
        
        
    }
}