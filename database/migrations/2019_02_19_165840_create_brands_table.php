<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('brand_name', 191);
			$table->string('brand_logo', 191);
			$table->string('brand_logo_size', 191);
			$table->string('brand_logo_file_type', 191);
			$table->string('brand_logo_path', 191)->nullable();
			$table->timestamps();
			$table->integer('added_by_user')->unsigned()->nullable()->index('brands_user_id_foreign');
			$table->string('user_type', 191)->nullable();
			$table->integer('status')->unsigned()->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('brands');
	}

}
