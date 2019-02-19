<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('candidate_profiles', function (Blueprint $table) {
           $table->integer('candidate_id')->nullable()->unsigned();
           $table->foreign('candidate_id')->references('id')->unique()->on('users')->onUpdate('cascade')->onDelete('cascade'); 
           $table->string('candidate_dp');
           $table->string('candidate_dp_size');
           $table->string('candidate_dp_extension');
           $table->string('candidate_career_level');
           $table->boolean('candidate_marital_status');
           $table->string('candidate_functional_area');
           $table->string('candidate_current_salary');
           $table->string('candidate_expected_salary');
           $table->string('candidate_postal_address');
           $table->string('candidate_profile_summary');
           $table->string('candidate_skills');
           $table->string('candidate_languages');
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
