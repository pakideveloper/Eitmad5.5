<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 8,
                'title' => 'test',
                'description' => 'test',
                'image_name' => '5bcad4a089e94images.jpeg',
                'image_url' => 'http://localhost/Eitmad5.5/public/admin/ecommerce/upload/sliders5bcad4a089e94images.jpeg',
                'image_size' => '12.186 kb',
                'image_extension' => 'jpeg',
                'slider_type' => 'test',
                'created_at' => '2018-10-20 07:04:35',
                'updated_at' => '2018-10-20 07:09:20',
            ),
        ));
        
        
    }
}