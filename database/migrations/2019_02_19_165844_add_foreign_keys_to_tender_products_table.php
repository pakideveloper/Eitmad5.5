<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTenderProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tender_products', function(Blueprint $table)
		{
			$table->foreign('category_id', 'category_id_foreign_constraint_products')->references('id')->on('product_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tender_id', 'tender_id_foreign_constraint_products')->references('id')->on('tenders')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tender_products', function(Blueprint $table)
		{
			$table->dropForeign('category_id_foreign_constraint_products');
			$table->dropForeign('tender_id_foreign_constraint_products');
		});
	}

}
