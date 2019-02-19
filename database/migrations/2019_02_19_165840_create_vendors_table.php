<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendors', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('vendor_name', 191);
			$table->string('vendor_description', 1000)->nullable();
			$table->string('vendor_logo', 191)->nullable();
			$table->string('logo_size', 191)->nullable();
			$table->string('logo_path', 191)->nullable();
			$table->string('logo_extension', 191)->nullable();
			$table->string('vendor_email', 191);
			$table->string('vendor_password', 191)->nullable();
			$table->string('vendor_contact', 191)->nullable();
			$table->string('vendor_url', 191)->nullable();
			$table->string('vendor_fax_no', 191)->nullable();
			$table->string('vendor_reg_no', 191);
			$table->string('person_incharge', 191)->nullable();
			$table->string('incharge_contact', 191)->nullable();
			$table->string('incharge_email', 191)->nullable();
			$table->string('incharge_cnic', 191);
			$table->string('cnic_front_path', 191);
			$table->string('cnic_front_extension', 191);
			$table->string('cnic_back_path', 191);
			$table->string('cnic_back_extension', 191);
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
		Schema::drop('vendors');
	}

}
