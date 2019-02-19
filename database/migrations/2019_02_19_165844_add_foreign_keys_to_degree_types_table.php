<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDegreeTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('degree_types', function(Blueprint $table)
		{
			$table->foreign('degree_level_id')->references('id')->on('degree_levels')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('degree_types', function(Blueprint $table)
		{
			$table->dropForeign('degree_types_degree_level_id_foreign');
		});
	}

}
