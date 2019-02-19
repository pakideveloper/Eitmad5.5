<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_file_name', 191);
			$table->string('product_file_size', 191);
			$table->string('product_file_extension', 191);
			$table->integer('product_id')->unsigned()->nullable()->index('product_files_product_id_foreign');
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
		Schema::drop('product_files');
	}

}
