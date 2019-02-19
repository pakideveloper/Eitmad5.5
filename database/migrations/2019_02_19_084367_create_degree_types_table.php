<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('degree_type_name'); 
            $table->integer('degree_level_id')->nullable()->unsigned();
            $table->foreign('degree_level_id')->references('id')->on('degree_levels')->onUpdate('cascade')->onDelete('cascade');   
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
