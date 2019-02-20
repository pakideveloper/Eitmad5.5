<?php

use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('discounts')->delete();
        
        \DB::table('discounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'discount_name' => 'Eid Discount',
                'discount_percent' => '11',
                'discount_type' => 'very maza',
                'added_by_user' => NULL,
                'user_type' => NULL,
                'created_at' => '2018-09-17 22:26:19',
                'updated_at' => '2018-09-17 22:26:19',
            ),
        ));
        
        
    }
}