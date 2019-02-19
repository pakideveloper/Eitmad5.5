<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCandidateJobAssociationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidate_job_associations', function(Blueprint $table)
		{
			$table->foreign('candidate_profile_id', 'candidate_job_association_candidate_profile_id_foreign')->references('id')->on('candidate_profiles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('job_id')->references('id')->on('jobs')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('candidate_job_associations', function(Blueprint $table)
		{
			$table->dropForeign('candidate_job_association_candidate_profile_id_foreign');
			$table->dropForeign('candidate_job_associations_job_id_foreign');
		});
	}

}
