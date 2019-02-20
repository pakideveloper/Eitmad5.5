<?php

use Illuminate\Database\Seeder;

class DegreeLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('degree_levels')->delete();
        
        \DB::table('degree_levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'degree_level_name' => 'Non-Matriculation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'degree_level_name' => 'Matriculation/O-level',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'degree_level_name' => 'Intermediate/A-level',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'degree_level_name' => 'Bachelor(14 years)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}