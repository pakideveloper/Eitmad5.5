<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_sub_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('job_sub_category_name', 191);
			$table->integer('job_category_id')->unsigned()->nullable()->index('job_sub_categories_job_category_id_foreign');
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
		Schema::drop('job_sub_categories');
	}

}
