<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('order_status');
			$table->integer('shipper_id')->unsigned()->nullable()->index('shipper_id');
			$table->integer('biller_id')->unsigned()->nullable()->index('biller_id');
			$table->string('shipping_charges', 191);
			$table->string('order_tax', 191);
			$table->string('order_amount_receivable', 191);
			$table->string('payment_method');
			$table->integer('user_id')->unsigned()->nullable()->index('orders_user_id_foreign');
			$table->integer('discount_id')->unsigned()->nullable()->index('orders_discount_id_foreign');
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
		Schema::drop('orders');
	}

}
