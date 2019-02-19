<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_experiences', function (Blueprint $table) {
           $table->increment('id');
           $table->string('candidate_experience_job_title');
           $table->integer('company_id')->nullable()->unsigned();
           $table->foreign('company_id')->references('id')->on('companies')->onUpdate('SET NULL')->onDelete('set null');
           $table->integer('city_id')->nullable()->unsigned();
           $table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('set null');
           $table->string('candidate_experience_starting_time');
           $table->string('candidate_experience_ending_time');
           $table->integer('industry_id')->nullable()->unsigned();
           $table->foreign('industry_id')->references('id')->on('industries')->onUpdate('SET NULL')->onDelete('set null');
           $table->string('candidate_experience_years');
           $table->string('candidate_experience_description');
           $table->integer('candidate_profile_id')->nullable()->unsigned();
           $table->foreign('candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('cascade')->onDelete('cascade');
            
                   

 
           
                
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
