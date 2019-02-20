<?php

use Illuminate\Database\Seeder;

class NewspaperTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('newspaper')->delete();
        
        \DB::table('newspaper')->insert(array (
            0 => 
            array (
                'id' => 2,
                'paper_name' => 'express',
                'paper_logo' => '5bdaaadde93dc69.jpg',
                'paper_logo_size' => '214.215 kb',
                'paper_logo_extension' => 'jpg',
                'created_at' => '2018-10-30',
                'updated_at' => '2018-11-01',
            ),
            1 => 
            array (
                'id' => 3,
                'paper_name' => 'Dunia',
                'paper_logo' => '5bdae4148276f2_HomeIconVillas1024x600-01.jpg',
                'paper_logo_size' => '468.845 kb',
                'paper_logo_extension' => 'jpg',
                'created_at' => '2018-11-01',
                'updated_at' => '2018-11-01',
            ),
        ));
        
        
    }
}