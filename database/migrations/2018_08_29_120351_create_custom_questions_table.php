<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('custom_question_title'); 
            $table->string('custom_question_option1'); 
            $table->string('custom_question_option2'); 
            $table->string('custom_question_option3'); 
            $table->string('custom_question_option4');    
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
