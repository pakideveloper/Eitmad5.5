<?php

use Illuminate\Database\Seeder;

class BiddingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('biddings')->delete();
        
        \DB::table('biddings')->insert(array (
            0 => 
            array (
                'id' => 142,
                'proposal' => 'test',
                'commission_ratio' => '2 %',
                'timestamp' => '2 days',
                'user_id' => 26,
                'to_user' => 26,
                'product_id' => 37,
                'commission_amount' => '240',
                'status' => 0,
                'created_at' => '2019-01-18 06:26:41',
                'updated_at' => '2019-01-18 06:26:41',
            ),
            1 => 
            array (
                'id' => 143,
                'proposal' => 'test',
                'commission_ratio' => '2 %',
                'timestamp' => '2 days',
                'user_id' => 26,
                'to_user' => 25,
                'product_id' => 33,
                'commission_amount' => '240',
                'status' => 0,
                'created_at' => '2019-01-18 07:45:30',
                'updated_at' => '2019-01-18 07:45:30',
            ),
        ));
        
        
    }
}