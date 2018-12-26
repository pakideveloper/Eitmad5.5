<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
        	[
        		'name' => 'role-read',
        		'display_name' => 'Display role Listing',
        		'description' =>  'See only listing of rules',
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create role',
        		'description' =>  'Create new role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit role',
        		'description' =>  'Edit role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete role',
        		'description' =>  'Delete role'
        	]
        ];

        foreach ($permissions as $key => $value) {
        	Permission::create($value);
        }
    }
}
