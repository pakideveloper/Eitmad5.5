<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillingDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('biller_first_name', 191);
			$table->string('biller_last_name', 191);
			$table->string('biller_email', 191);
			$table->string('biller_phone_number', 191);
			$table->integer('city_id')->unsigned()->nullable()->index('billing_details_city_id_foreign');
			$table->string('biller_address', 191);
			$table->boolean('address_check')->default(0);
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
		Schema::drop('billing_details');
	}

}
