<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_category_name'); 
            $table->integer('product_category_id')->nullable()->unsigned();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('feature_names');         
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
