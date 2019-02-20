<?php

use Illuminate\Database\Seeder;

class DegreeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('degree_types')->delete();
        
        \DB::table('degree_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'degree_type_name' => 'Matric in Arts',
                'degree_level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'degree_type_name' => 'Matric in Science',
                'degree_level_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'degree_type_name' => 'Bachelors in Advance Computer Science',
                'degree_level_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}