<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiddingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('biddings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('proposal');
			$table->string('commission_ratio', 11);
			$table->string('timestamp', 11);
			$table->integer('user_id')->unsigned()->nullable()->index('biddings_user_id_foreign');
			$table->integer('to_user')->nullable();
			$table->integer('product_id')->unsigned()->nullable()->index('biddings_product_id_foreign');
			$table->string('commission_amount')->default('0');
			$table->integer('status')->default(0);
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
		Schema::drop('biddings');
	}

}
