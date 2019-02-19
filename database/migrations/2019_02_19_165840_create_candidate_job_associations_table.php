<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateJobAssociationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_job_associations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('job_id')->unsigned()->nullable()->index('candidate_job_associations_job_id_foreign');
			$table->integer('candidate_profile_id')->unsigned()->nullable()->index('candidate_job_associations_candidate_profile_id_foreign');
			$table->boolean('status')->nullable()->default(0);
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
		Schema::drop('candidate_job_associations');
	}

}
