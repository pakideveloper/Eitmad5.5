<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateEducationalProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_educational_profiles', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('job_id')->nullable()->unsigned();
           $table->foreign('job_id')->references('id')->on('jobs')->onUpdate('SET NULL')->onDelete('set null');
           $table->integer('candidate_profile_id')->nullable()->unsigned();
           $table->foreign('candidate_profile_id')->references('candidate_id')->on('candidate_profiles')->onUpdate('cascade')->onDelete('cascade');
           $table->boolean('status');
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
