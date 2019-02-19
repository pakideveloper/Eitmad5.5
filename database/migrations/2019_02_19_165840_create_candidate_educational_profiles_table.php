<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateEducationalProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_educational_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('candidate_education_profile_title', 191);
			$table->integer('degree_type_id')->unsigned()->nullable()->index('candidate_educational_profiles_degree_type_id_foreign');
			$table->string('candidate_education_major_subjects', 191);
			$table->integer('city_id')->unsigned()->nullable()->index('candidate_educational_profiles_city_id_foreign');
			$table->string('candidate_education_institute_name', 191);
			$table->string('candidate_education_completion_year', 191);
			$table->string('candidate_education_result_type', 191);
			$table->string('candidate_education_result', 191);
			$table->integer('candidate_profile_id')->unsigned()->nullable()->index('candidate_educational_profiles_candidate_profile_id_foreign');
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
		Schema::drop('candidate_educational_profiles');
	}

}
