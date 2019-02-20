<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_name' => 'Lahore',
                'city_code' => '58000',
                'region_id' => 1,
                'country_id' => 1,
                'created_at' => '2018-10-09 11:27:55',
                'updated_at' => '2018-10-09 11:27:55',
            ),
        ));
        
        
    }
}