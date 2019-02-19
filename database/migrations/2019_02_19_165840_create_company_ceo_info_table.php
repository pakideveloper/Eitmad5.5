<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyCeoInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_ceo_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ceo_name', 191);
			$table->string('ceo_contact', 191)->nullable();
			$table->string('ceo_email', 191)->nullable();
			$table->string('ceo_cnic', 191)->nullable();
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
		Schema::drop('company_ceo_info');
	}

}
