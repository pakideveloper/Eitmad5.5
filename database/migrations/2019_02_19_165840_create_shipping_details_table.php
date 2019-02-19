<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipping_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('shipper_first_name', 191);
			$table->string('shipper_last_name', 191);
			$table->string('shipper_email', 191);
			$table->string('shipper_phone_number', 191);
			$table->integer('city_id')->unsigned()->nullable()->index('shipping_details_city_id_foreign');
			$table->string('shipper_address', 191);
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
		Schema::drop('shipping_details');
	}

}
