<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_product_unit_price', 191);
			$table->string('order_product_quantity', 191);
			$table->string('order_product_total_price', 191);
			$table->integer('order_id')->unsigned()->nullable()->index('order_products_order_id_foreign');
			$table->integer('product_id')->unsigned()->nullable()->index('order_products_product_id_foreign');
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
		Schema::drop('order_products');
	}

}
