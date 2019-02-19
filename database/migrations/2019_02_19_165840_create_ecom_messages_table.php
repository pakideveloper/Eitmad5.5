<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEcomMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ecom_messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('message', 191);
			$table->integer('user_id')->nullable();
			$table->integer('visitor_id')->nullable();
			$table->boolean('read_unread')->default(0);
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
		Schema::drop('ecom_messages');
	}

}
