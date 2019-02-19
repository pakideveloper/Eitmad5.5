<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaperPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('paper_posts', function(Blueprint $table)
		{
			$table->foreign('paper_ad_category', 'paper_category_foreign')->references('id')->on('job_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('paper_id', 'paper_post_foreign')->references('id')->on('newspaper')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('paper_ad_sub_category', 'paper_sub_category_foreign')->references('id')->on('job_sub_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('paper_posts', function(Blueprint $table)
		{
			$table->dropForeign('paper_category_foreign');
			$table->dropForeign('paper_post_foreign');
			$table->dropForeign('paper_sub_category_foreign');
		});
	}

}
