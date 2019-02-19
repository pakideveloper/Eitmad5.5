<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_profiles', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->nullable()->unique('id');
			$table->string('candidate_dp', 191);
			$table->string('candidate_dp_size', 191);
			$table->string('candidate_dp_extension', 191);
			$table->string('caption', 60)->nullable();
			$table->string('blog_link', 60)->nullable();
			$table->boolean('professional_experience')->nullable()->default(0);
			$table->string('candidate_career_level', 191);
			$table->string('candidate_marital_status', 30);
			$table->string('candidate_functional_area', 191)->nullable();
			$table->string('candidate_current_salary', 191);
			$table->string('candidate_expected_salary', 191);
			$table->string('candidate_postal_address', 191)->nullable();
			$table->string('candidate_profile_summary', 191)->nullable();
			$table->string('candidate_skills', 191)->nullable();
			$table->string('candidate_languages', 191)->nullable();
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
		Schema::drop('candidate_profiles');
	}

}
