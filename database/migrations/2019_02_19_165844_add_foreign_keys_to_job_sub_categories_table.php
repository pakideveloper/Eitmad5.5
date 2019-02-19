<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJobSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('job_sub_categories', function(Blueprint $table)
		{
			$table->foreign('job_category_id')->references('id')->on('job_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('job_sub_categories', function(Blueprint $table)
		{
			$table->dropForeign('job_sub_categories_job_category_id_foreign');
		});
	}

}
