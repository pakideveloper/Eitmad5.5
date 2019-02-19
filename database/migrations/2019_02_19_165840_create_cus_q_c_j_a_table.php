<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCusQCJATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cus_q_c_j_a', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('job_id')->unsigned()->nullable()->index('cus_q_c_j_a_job_id_foreign');
			$table->integer('candidate_profile_id')->unsigned()->nullable()->index('cus_q_c_j_a_candidate_profile_id_foreign');
			$table->integer('custom_question_id')->unsigned()->nullable()->index('cus_q_c_j_a_custom_question_id_foreign');
			$table->string('candidate_response', 191);
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
		Schema::drop('cus_q_c_j_a');
	}

}
