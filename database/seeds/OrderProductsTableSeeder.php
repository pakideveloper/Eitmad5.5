<?php

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_products')->delete();
        
        \DB::table('order_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 42,
                'product_id' => NULL,
                'created_at' => '2018-10-16 13:24:18',
                'updated_at' => '2018-10-16 13:24:18',
            ),
            1 => 
            array (
                'id' => 2,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 43,
                'product_id' => NULL,
                'created_at' => '2018-10-16 13:32:13',
                'updated_at' => '2018-10-16 13:32:13',
            ),
            2 => 
            array (
                'id' => 3,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 44,
                'product_id' => NULL,
                'created_at' => '2018-10-16 13:32:33',
                'updated_at' => '2018-10-16 13:32:33',
            ),
            3 => 
            array (
                'id' => 4,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 45,
                'product_id' => NULL,
                'created_at' => '2018-10-16 13:53:10',
                'updated_at' => '2018-10-16 13:53:10',
            ),
            4 => 
            array (
                'id' => 5,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 46,
                'product_id' => NULL,
                'created_at' => '2018-10-17 07:55:25',
                'updated_at' => '2018-10-17 07:55:25',
            ),
            5 => 
            array (
                'id' => 6,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 47,
                'product_id' => NULL,
                'created_at' => '2018-10-17 09:45:41',
                'updated_at' => '2018-10-17 09:45:41',
            ),
            6 => 
            array (
                'id' => 7,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 48,
                'product_id' => NULL,
                'created_at' => '2018-10-17 09:49:26',
                'updated_at' => '2018-10-17 09:49:26',
            ),
            7 => 
            array (
                'id' => 8,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 49,
                'product_id' => NULL,
                'created_at' => '2018-10-17 09:50:25',
                'updated_at' => '2018-10-17 09:50:25',
            ),
            8 => 
            array (
                'id' => 9,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 50,
                'product_id' => NULL,
                'created_at' => '2018-10-17 09:50:47',
                'updated_at' => '2018-10-17 09:50:47',
            ),
            9 => 
            array (
                'id' => 10,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 51,
                'product_id' => NULL,
                'created_at' => '2018-10-17 09:58:54',
                'updated_at' => '2018-10-17 09:58:54',
            ),
            10 => 
            array (
                'id' => 11,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 52,
                'product_id' => NULL,
                'created_at' => '2018-10-17 09:59:22',
                'updated_at' => '2018-10-17 09:59:22',
            ),
            11 => 
            array (
                'id' => 12,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 53,
                'product_id' => NULL,
                'created_at' => '2018-10-17 10:03:04',
                'updated_at' => '2018-10-17 10:03:04',
            ),
            12 => 
            array (
                'id' => 13,
                'order_product_unit_price' => '4005.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '4005.00',
                'order_id' => 54,
                'product_id' => NULL,
                'created_at' => '2018-10-17 11:02:10',
                'updated_at' => '2018-10-17 11:02:10',
            ),
            13 => 
            array (
                'id' => 14,
                'order_product_unit_price' => '106800.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '106800.00',
                'order_id' => 55,
                'product_id' => 8,
                'created_at' => '2018-11-01 05:53:20',
                'updated_at' => '2018-11-01 05:53:20',
            ),
            14 => 
            array (
                'id' => 15,
                'order_product_unit_price' => '142400.00',
                'order_product_quantity' => '1',
                'order_product_total_price' => '142400.00',
                'order_id' => 56,
                'product_id' => 8,
                'created_at' => '2018-11-06 07:43:31',
                'updated_at' => '2018-11-06 07:43:31',
            ),
        ));
        
        
    }
}