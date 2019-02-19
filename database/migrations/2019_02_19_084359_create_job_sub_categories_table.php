<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_sub_category_name');
            $table->integer('job_category_id')->nullable()->unsigned();
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onUpdate('cascade')->onDelete('cascade');   
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
