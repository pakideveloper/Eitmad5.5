<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function(Blueprint $table)
		{
			$table->foreign('brand_id')->references('id')->on('brands')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('discount_id')->references('id')->on('discounts')->onUpdate('SET NULL')->onDelete('RESTRICT');
			$table->foreign('title_img_id', 'products_product_file_id_foreign')->references('id')->on('product_files')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('sub_category_id')->references('id')->on('product_sub_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('added_by_user', 'products_user_id_foreign')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function(Blueprint $table)
		{
			$table->dropForeign('products_brand_id_foreign');
			$table->dropForeign('products_discount_id_foreign');
			$table->dropForeign('products_product_file_id_foreign');
			$table->dropForeign('products_sub_category_id_foreign');
			$table->dropForeign('products_user_id_foreign');
		});
	}

}
