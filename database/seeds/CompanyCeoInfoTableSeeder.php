<?php

use Illuminate\Database\Seeder;

class CompanyCeoInfoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_ceo_info')->delete();
        
        \DB::table('company_ceo_info')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ceo_name' => 'test',
                'ceo_contact' => NULL,
                'ceo_email' => NULL,
                'ceo_cnic' => '23789',
                'created_at' => '2018-10-11 09:40:35',
                'updated_at' => '2018-10-11 09:40:35',
            ),
            1 => 
            array (
                'id' => 2,
                'ceo_name' => 'test',
                'ceo_contact' => NULL,
                'ceo_email' => NULL,
                'ceo_cnic' => '23789',
                'created_at' => '2018-10-11 09:42:38',
                'updated_at' => '2018-10-11 09:42:38',
            ),
            2 => 
            array (
                'id' => 3,
                'ceo_name' => 'test',
                'ceo_contact' => '4322',
                'ceo_email' => 'hussam.ravian16@gmail.com',
                'ceo_cnic' => '23789',
                'created_at' => '2018-10-11 09:51:44',
                'updated_at' => '2018-10-11 09:51:44',
            ),
            3 => 
            array (
                'id' => 4,
                'ceo_name' => 'test',
                'ceo_contact' => '4322',
                'ceo_email' => 'hussam.ravian16@gmail.com',
                'ceo_cnic' => '23789',
                'created_at' => '2018-10-11 09:52:07',
                'updated_at' => '2018-10-11 09:52:07',
            ),
            4 => 
            array (
                'id' => 5,
                'ceo_name' => 'test',
                'ceo_contact' => '4322',
                'ceo_email' => 'hussam.ravian16@gmail.com',
                'ceo_cnic' => '23789',
                'created_at' => '2018-10-11 10:03:10',
                'updated_at' => '2018-10-11 10:03:10',
            ),
            5 => 
            array (
                'id' => 6,
                'ceo_name' => 'Hussam Azhar',
                'ceo_contact' => '453434345324',
                'ceo_email' => 'hussam.ravian16@gmail.com',
                'ceo_cnic' => '34534-5454353-2',
                'created_at' => '2018-10-16 06:32:58',
                'updated_at' => '2018-10-16 06:32:58',
            ),
        ));
        
        
    }
}