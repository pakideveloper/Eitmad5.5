<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCandidateExperienceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidate_experience', function(Blueprint $table)
		{
			$table->foreign('candidate_profile_id', 'candidate_experience_candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('industry_id')->references('id')->on('industries')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('candidate_experience', function(Blueprint $table)
		{
			$table->dropForeign('candidate_experience_candidate_profile_id');
			$table->dropForeign('candidate_experience_city_id_foreign');
			$table->dropForeign('candidate_experience_company_id_foreign');
			$table->dropForeign('candidate_experience_industry_id_foreign');
		});
	}

}
