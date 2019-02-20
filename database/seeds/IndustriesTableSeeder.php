<?php

use Illuminate\Database\Seeder;

class IndustriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('industries')->delete();
        
        \DB::table('industries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'industry_name' => 'Informattion Tech',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}