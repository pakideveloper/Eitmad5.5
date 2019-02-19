<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTenderResponsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tender_responses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('shop_name', 100);
			$table->string('response_title', 100);
			$table->integer('tender_id')->index('tender_id');
			$table->integer('vendor_id')->unsigned()->index('vendor_id');
			$table->text('response_description', 65535);
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
		Schema::drop('tender_responses');
	}

}
