<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_name' => 'Pakistan',
                'created_at' => '2018-10-09 11:17:21',
                'updated_at' => '2018-10-09 11:30:15',
            ),
            1 => 
            array (
                'id' => 2,
                'country_name' => 'Turkey',
                'created_at' => '2018-11-05 06:28:00',
                'updated_at' => '2018-11-05 06:28:00',
            ),
        ));
        
        
    }
}