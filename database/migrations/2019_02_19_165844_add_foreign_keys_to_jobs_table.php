<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->foreign('area_id')->references('id')->on('areas')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('degree_level_id')->references('id')->on('degree_levels')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('degree_type_id')->references('id')->on('degree_types')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('job_sub_category_id')->references('id')->on('job_sub_categories')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('job_type_id')->references('id')->on('job_types')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->dropForeign('jobs_area_id_foreign');
			$table->dropForeign('jobs_city_id_foreign');
			$table->dropForeign('jobs_company_id_foreign');
			$table->dropForeign('jobs_degree_level_id_foreign');
			$table->dropForeign('jobs_degree_type_id_foreign');
			$table->dropForeign('jobs_job_sub_category_id_foreign');
			$table->dropForeign('jobs_job_type_id_foreign');
		});
	}

}
