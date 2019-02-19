<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersWishlistsProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_wishlists_products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->unsigned();
			$table->integer('product_id')->unsigned()->index('product_wishlist_foreign');
			$table->timestamps();
			$table->unique(['user_id','product_id'], 'user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_wishlists_products');
	}

}
