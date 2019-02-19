<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('candidate_project_name', 191);
			$table->string('candidate_project_starting_time', 191);
			$table->string('candidate_project_ending_time', 191);
			$table->string('candidate_project_description', 191);
			$table->string('candidate_project_file', 191);
			$table->string('candidate_project_file_extension', 191);
			$table->string('candidate_project_file_size', 191);
			$table->integer('candidate_profile_id')->unsigned()->nullable()->index('candidate_projects_candidate_profile_id_foreign');
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
		Schema::drop('candidate_projects');
	}

}
