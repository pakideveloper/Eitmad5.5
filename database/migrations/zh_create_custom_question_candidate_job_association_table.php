<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomQuestionCandidateJobAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_question_candidate_job_association', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->nullable()->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('candidate_profile_id')->nullable()->unsigned();
            $table->foreign('candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('custom_question_id')->nullable()->unsigned();
            $table->foreign('custom_question_id')->references('id')->on('custom_questions')->onUpdate('cascade')->onDelete('cascade');
            $table->increments('candidate_response');
           
                
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
