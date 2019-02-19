<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCusQCJATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cus_q_c_j_a', function(Blueprint $table)
		{
			$table->foreign('candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('custom_question_id')->references('id')->on('custom_questions')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('job_id')->references('id')->on('jobs')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cus_q_c_j_a', function(Blueprint $table)
		{
			$table->dropForeign('cus_q_c_j_a_candidate_profile_id_foreign');
			$table->dropForeign('cus_q_c_j_a_custom_question_id_foreign');
			$table->dropForeign('cus_q_c_j_a_job_id_foreign');
		});
	}

}
