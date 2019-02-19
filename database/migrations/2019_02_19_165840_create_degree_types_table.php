<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDegreeTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('degree_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('degree_type_name', 191);
			$table->integer('degree_level_id')->unsigned()->nullable()->index('degree_types_degree_level_id_foreign');
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
		Schema::drop('degree_types');
	}

}
