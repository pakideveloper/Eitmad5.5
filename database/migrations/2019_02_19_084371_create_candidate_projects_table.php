<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_projects', function (Blueprint $table) {
           $table->increments('id');
           $table->string('candidate_project_name');
           $table->string('candidate_project_starting_time');
           $table->string('candidate_project_ending_time');
           $table->string('candidate_project_description');
           $table->string('candidate_project_file');
           $table->string('candidate_project_file_extension');
           $table->string('candidate_project_file_size');
           $table->integer('candidate_profile_id')->nullable()->unsigned();
           $table->foreign('candidate_profile_id')->references('candidate_id')->on('candidate_profiles')->onUpdate('cascade')->onDelete('cascade');
                   

 
           
                
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
