<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewspaperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('newspaper', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('paper_name')->nullable();
			$table->string('paper_logo');
			$table->string('paper_logo_size', 20);
			$table->string('paper_logo_extension');
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('newspaper');
	}

}
