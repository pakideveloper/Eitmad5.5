<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('custom_question_title', 191);
			$table->string('custom_question_option1', 191);
			$table->string('custom_question_option2', 191);
			$table->string('custom_question_option3', 191);
			$table->string('custom_question_option4', 191);
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
		Schema::drop('custom_questions');
	}

}
