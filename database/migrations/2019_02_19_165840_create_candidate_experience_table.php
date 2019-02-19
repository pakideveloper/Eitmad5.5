<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateExperienceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_experience', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('candidate_experience_job_title', 191);
			$table->integer('company_id')->unsigned()->nullable()->index('candidate_experience_company_id_foreign');
			$table->integer('city_id')->unsigned()->nullable()->index('candidate_experience_city_id_foreign');
			$table->string('candidate_experience_starting_time', 191);
			$table->string('candidate_experience_ending_time', 191);
			$table->integer('industry_id')->unsigned()->nullable()->index('candidate_experience_industry_id_foreign');
			$table->string('candidate_experience_years', 191);
			$table->string('candidate_experience_description', 191);
			$table->integer('candidate_profile_id')->unsigned()->nullable()->index('candidate_experience_candidate_profile_id_foreign');
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
		Schema::drop('candidate_experience');
	}

}
