<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersWishlistsProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_wishlists_products', function(Blueprint $table)
		{
			$table->foreign('product_id', 'product_wishlist_foreign')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'user_wishlist_foreign')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_wishlists_products', function(Blueprint $table)
		{
			$table->dropForeign('product_wishlist_foreign');
			$table->dropForeign('user_wishlist_foreign');
		});
	}

}
