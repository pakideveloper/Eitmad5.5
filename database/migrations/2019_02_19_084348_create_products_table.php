<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name'); 
            $table->string('product_size'); 
            $table->string('product_colour'); 
            $table->integer('product_price');
            $table->string('product_quantity');
            $table->string('product_discounted_price'); 
            $table->integer('sub_category_id')->nullable()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onUpdate('cascade')->onDelete('cascade');;   
            $table->integer('brand_id')->nullable()->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');;
            $table->integer('discount_id')->nullable()->unsigned();
            $table->foreign('discount_id')->references('id')->on('discounts')->onUpdate('SET NULL');      
             $table->string('other_features'); 
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
