<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->foreign('biller_id', 'biller_id')->references('id')->on('billing_details')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('discount_id')->references('id')->on('discounts')->onUpdate('SET NULL')->onDelete('RESTRICT');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('shipper_id', 'shipper_id')->references('id')->on('shipping_details')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->dropForeign('biller_id');
			$table->dropForeign('orders_discount_id_foreign');
			$table->dropForeign('orders_user_id_foreign');
			$table->dropForeign('shipper_id');
		});
	}

}
