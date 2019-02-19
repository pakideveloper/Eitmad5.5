<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_sub_categories', function(Blueprint $table)
		{
			$table->foreign('product_category_id')->references('id')->on('product_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_sub_categories', function(Blueprint $table)
		{
			$table->dropForeign('product_sub_categories_product_category_id_foreign');
		});
	}

}
