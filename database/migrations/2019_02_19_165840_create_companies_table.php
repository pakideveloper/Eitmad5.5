<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('company_name', 191);
			$table->string('company_description', 1000)->nullable();
			$table->string('company_logo', 191);
			$table->string('logo_size', 191)->nullable();
			$table->string('logo_path', 191)->nullable();
			$table->string('company_address', 191);
			$table->integer('city_id')->unsigned()->nullable()->index('companies_city_id_foreign');
			$table->string('contact_email', 191)->nullable();
			$table->string('contact_person', 191)->nullable();
			$table->string('company_url', 191)->nullable();
			$table->string('company_phone', 191);
			$table->string('ownership_type', 191)->nullable();
			$table->integer('no_of_employees')->nullable();
			$table->string('operating_since', 191)->nullable();
			$table->string('secp_id', 191)->nullable();
			$table->integer('company_ceo_id')->unsigned()->nullable()->index('companies_company_ceo_id_foreign');
			$table->string('cr_designation', 191)->nullable();
			$table->integer('industry_id')->unsigned()->nullable()->index('companies_industry_id_foreign');
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
		Schema::drop('companies');
	}

}
