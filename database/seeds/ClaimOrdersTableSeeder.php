<?php

use Illuminate\Database\Seeder;

class ClaimOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('claim_orders')->delete();
        
        \DB::table('claim_orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 37,
                'claim_request' => 'I WANT TO KNOW WHERE MY ORDER IS?',
                'claim_issue' => 'test',
                'created_at' => '2019-01-04 14:30:24',
                'updated_at' => '2019-01-04 14:30:24',
            ),
        ));
        
        
    }
}