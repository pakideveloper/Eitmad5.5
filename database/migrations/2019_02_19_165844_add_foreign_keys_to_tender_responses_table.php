<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTenderResponsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tender_responses', function(Blueprint $table)
		{
			$table->foreign('tender_id', 'tender_id_foreign_constraint')->references('id')->on('tenders')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('vendor_id', 'vendor_id_foreign_constraint')->references('id')->on('vendors')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tender_responses', function(Blueprint $table)
		{
			$table->dropForeign('tender_id_foreign_constraint');
			$table->dropForeign('vendor_id_foreign_constraint');
		});
	}

}
