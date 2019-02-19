<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('job_title', 191);
			$table->string('job_description', 191);
			$table->string('job_skills', 191)->nullable();
			$table->string('job_career_level', 191)->nullable();
			$table->string('job_no_of_position', 191);
			$table->integer('job_year_of_experience_min')->nullable();
			$table->integer('job_year_of_experience_max')->nullable();
			$table->integer('featuring_status')->nullable()->default(0);
			$table->integer('job_salary_min_range')->nullable();
			$table->integer('job_salary_max_range')->nullable();
			$table->string('job_gender_preference', 191);
			$table->boolean('job_oath_status')->nullable();
			$table->integer('company_id')->unsigned()->nullable()->index('jobs_company_id_foreign');
			$table->integer('job_type_id')->unsigned()->nullable()->index('jobs_job_type_id_foreign');
			$table->string('job_shift', 191)->nullable();
			$table->integer('job_sub_category_id')->unsigned()->nullable()->index('jobs_job_sub_category_id_foreign');
			$table->integer('city_id')->unsigned()->nullable()->index('jobs_city_id_foreign');
			$table->integer('degree_level_id')->unsigned()->nullable()->index('jobs_degree_level_id_foreign');
			$table->integer('degree_type_id')->unsigned()->nullable()->index('jobs_degree_type_id_foreign');
			$table->string('specific_degree', 191)->nullable();
			$table->integer('area_id')->unsigned()->nullable()->index('jobs_area_id_foreign');
			$table->integer('age_requirement_min')->nullable();
			$table->integer('age_requirement_max')->nullable();
			$table->string('apply_by', 191)->nullable();
			$table->integer('approval_status')->nullable()->default(0);
			$table->integer('active_status')->nullable()->default(0);
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
		Schema::drop('jobs');
	}

}
