<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandSubcategoryAssocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brand_subcategory_assoc', function(Blueprint $table)
		{
			$table->integer('brand_id')->unsigned();
			$table->integer('sub_category_id')->unsigned()->index('brand_subcategory_assoc_sub_category_id_foreign');
			$table->timestamps();
			$table->primary(['brand_id','sub_category_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('brand_subcategory_assoc');
	}

}
