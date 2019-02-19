<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTenderProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tender_products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('product_name', 50);
			$table->integer('product_qty');
			$table->integer('tender_id')->index('tendor_id');
			$table->integer('category_id')->unsigned()->index('category_id');
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
		Schema::drop('tender_products');
	}

}
