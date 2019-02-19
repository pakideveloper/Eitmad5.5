<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCandidateEducationalProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidate_educational_profiles', function(Blueprint $table)
		{
			$table->foreign('candidate_profile_id', 'candidate_educational_profiles_candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('degree_type_id')->references('id')->on('degree_types')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('candidate_educational_profiles', function(Blueprint $table)
		{
			$table->dropForeign('candidate_educational_profiles_candidate_profile_id');
			$table->dropForeign('candidate_educational_profiles_city_id_foreign');
			$table->dropForeign('candidate_educational_profiles_degree_type_id_foreign');
		});
	}

}
