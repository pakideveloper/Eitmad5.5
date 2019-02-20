<?php

use Illuminate\Database\Seeder;

class JobSubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_sub_categories')->delete();
        
        \DB::table('job_sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'job_sub_category_name' => 'Asp.Net Development',
                'job_category_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'job_sub_category_name' => 'Auditing',
                'job_category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'job_sub_category_name' => 'PHP Laravel Development',
                'job_category_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}