<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillingInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('credit_card_number', 191);
			$table->string('credit_card_type', 191);
			$table->string('credit_card_code', 191);
			$table->string('credit_card_title', 191);
			$table->string('credit_card_expiry_date', 191);
			$table->integer('order_id')->unsigned()->nullable()->index('billing_infos_order_id_foreign');
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
		Schema::drop('billing_infos');
	}

}
