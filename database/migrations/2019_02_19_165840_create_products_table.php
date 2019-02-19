<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_name', 191);
			$table->text('product_description', 65535);
			$table->string('product_size', 191);
			$table->string('product_colour', 191);
			$table->integer('product_price');
			$table->string('product_quantity', 191);
			$table->string('product_discounted_price', 191);
			$table->integer('sub_category_id')->unsigned()->nullable()->index('products_sub_category_id_foreign');
			$table->integer('brand_id')->unsigned()->nullable()->index('products_brand_id_foreign');
			$table->integer('discount_id')->unsigned()->nullable()->index('products_discount_id_foreign');
			$table->integer('title_img_id')->unsigned()->nullable()->index('products_product_file_id_foreign');
			$table->string('other_features');
			$table->string('slug');
			$table->integer('added_by_user')->unsigned()->nullable()->index('products_user_id_foreign');
			$table->string('user_type', 191)->nullable();
			$table->string('product_type', 50)->nullable();
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
		Schema::drop('products');
	}

}
