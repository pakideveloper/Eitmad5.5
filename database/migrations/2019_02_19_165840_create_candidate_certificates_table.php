<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateCertificatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_certificates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('candidate_certificate_name', 191);
			$table->string('candidate_certificate_institute_name', 191);
			$table->string('candidate_certificate_completion_date', 191);
			$table->integer('candidate_profile_id')->unsigned()->nullable()->index('candidate_certificates_candidate_profile_id_foreign');
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
		Schema::drop('candidate_certificates');
	}

}
