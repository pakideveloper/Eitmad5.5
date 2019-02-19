<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCandidateCertificatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidate_certificates', function(Blueprint $table)
		{
			$table->foreign('candidate_profile_id', 'candidate_certificates_candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('candidate_certificates', function(Blueprint $table)
		{
			$table->dropForeign('candidate_certificates_candidate_profile_id');
		});
	}

}
