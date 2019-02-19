<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBrandSubcategoryAssocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('brand_subcategory_assoc', function(Blueprint $table)
		{
			$table->foreign('brand_id')->references('id')->on('brands')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('sub_category_id')->references('id')->on('product_sub_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('brand_subcategory_assoc', function(Blueprint $table)
		{
			$table->dropForeign('brand_subcategory_assoc_brand_id_foreign');
			$table->dropForeign('brand_subcategory_assoc_sub_category_id_foreign');
		});
	}

}
