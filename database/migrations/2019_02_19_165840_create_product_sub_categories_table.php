<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_sub_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sub_category_name', 191);
			$table->integer('product_category_id')->unsigned()->nullable()->index('product_sub_categories_product_category_id_foreign');
			$table->string('feature_names');
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
		Schema::drop('product_sub_categories');
	}

}
