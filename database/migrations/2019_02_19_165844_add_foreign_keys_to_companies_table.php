<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			$table->foreign('city_id')->references('id')->on('cities')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_ceo_id')->references('id')->on('company_ceo_info')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('industry_id')->references('id')->on('industries')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id', 'companies_user_id_foreign')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			$table->dropForeign('companies_city_id_foreign');
			$table->dropForeign('companies_company_ceo_id_foreign');
			$table->dropForeign('companies_industry_id_foreign');
			$table->dropForeign('companies_user_id_foreign');
		});
	}

}
