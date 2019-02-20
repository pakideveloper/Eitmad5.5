<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'region_name' => 'Punjab',
                'country_id' => 1,
                'created_at' => '2018-10-09 11:27:16',
                'updated_at' => '2018-10-09 11:27:16',
            ),
            1 => 
            array (
                'id' => 2,
                'region_name' => 'Sindh',
                'country_id' => 1,
                'created_at' => '2018-11-05 06:28:22',
                'updated_at' => '2018-11-05 06:29:09',
            ),
        ));
        
        
    }
}