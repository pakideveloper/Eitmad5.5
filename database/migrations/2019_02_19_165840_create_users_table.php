<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 191);
			$table->string('last_name', 191);
			$table->string('email', 191)->unique();
			$table->string('password', 191);
			$table->string('address', 191)->nullable();
			$table->string('cnic', 191)->nullable();
			$table->string('contact_number', 191)->nullable();
			$table->string('date_of_birth', 191)->nullable();
			$table->string('gender', 191)->nullable();
			$table->string('nationality', 191)->nullable();
			$table->string('profile_pic')->nullable();
			$table->string('profile_url')->nullable();
			$table->string('profile_pic_size', 20)->nullable();
			$table->string('profile_pic_extension', 20)->nullable();
			$table->integer('area_id')->unsigned()->nullable()->index('users_area_id_foreign');
			$table->integer('city_id')->unsigned()->nullable()->index('users_city_id_foreign');
			$table->string('provider')->nullable();
			$table->string('provider_id')->nullable();
			$table->integer('activation')->default(1);
			$table->string('remember_token', 100)->nullable();
			$table->boolean('verified')->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
