<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'role-read',
                'display_name' => 'Display role Listing',
                'description' => 'See only listing of rules',
                'created_at' => '2019-02-18 06:23:45',
                'updated_at' => '2019-02-18 06:23:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'role-create',
                'display_name' => 'Create role',
                'description' => 'Create new role',
                'created_at' => '2019-02-18 06:23:45',
                'updated_at' => '2019-02-18 06:23:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'role-edit',
                'display_name' => 'Edit role',
                'description' => 'Edit role',
                'created_at' => '2019-02-18 06:23:45',
                'updated_at' => '2019-02-18 06:23:45',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'role-delete',
                'display_name' => 'Delete role',
                'description' => 'Delete role',
                'created_at' => '2019-02-18 06:23:45',
                'updated_at' => '2019-02-18 06:23:45',
            ),
        ));
        
        
    }
}