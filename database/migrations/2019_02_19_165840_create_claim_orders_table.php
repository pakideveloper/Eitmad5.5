<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClaimOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('claim_orders', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product_id')->unsigned()->nullable();
			$table->string('claim_request');
			$table->string('claim_issue');
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
		Schema::drop('claim_orders');
	}

}
