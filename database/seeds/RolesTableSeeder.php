<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'visitor',
                'display_name' => 'visitor',
                'description' => 'visitor',
                'created_at' => '2019-02-18 06:24:12',
                'updated_at' => '2019-02-18 06:24:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'e_admin',
                'display_name' => 'e_admin',
                'description' => 'e_admin',
                'created_at' => '2019-02-18 06:24:56',
                'updated_at' => '2019-02-18 06:24:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'vendor',
                'display_name' => 'vendor',
                'description' => 'vendor',
                'created_at' => '2019-02-18 06:25:12',
                'updated_at' => '2019-02-18 06:25:12',
            ),
        ));
        
        
    }
}