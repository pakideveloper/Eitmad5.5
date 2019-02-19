<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaperPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paper_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('paper_post_title', 191);
			$table->string('post_description')->nullable();
			$table->integer('paper_id')->nullable()->index('paper_post_foreign');
			$table->string('paper_ad', 191);
			$table->string('paper_ad_size', 191);
			$table->string('paper_ad_type', 191);
			$table->integer('paper_ad_category')->unsigned()->nullable()->index('paper_category_foreign');
			$table->integer('paper_ad_sub_category')->unsigned()->nullable()->index('paper_sub_category_foreign');
			$table->string('paper_ad_extension', 191);
			$table->integer('number_of_jobs');
			$table->dateTime('expired')->nullable();
			$table->string('posted_by', 191);
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
		Schema::drop('paper_posts');
	}

}
