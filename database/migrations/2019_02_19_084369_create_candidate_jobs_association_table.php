<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateJobsAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_jobs_association', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_job_status');

            $table->integer('job_id')->nullable()->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onUpdate('cascade')->onDelete('cascade'); 


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
