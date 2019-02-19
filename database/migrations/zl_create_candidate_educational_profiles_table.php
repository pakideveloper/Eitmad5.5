<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateDegreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_educational_profiles', function (Blueprint $table) {
           $table->increment('id');
           $table->string('candidate_education_profile_title');
           $table->integer('degree_type_id')->nullable()->unsigned();
           $table->foreign('degree_type_id')->references('id')->on('degree_types')->onUpdate('SET NULL')->onDelete('set null');
           $table->string('candidate_education_major_subjects');
           $table->integer('city_id')->nullable()->unsigned();
           $table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('set null');
           $table->string('candidate_education_institute_name');
           $table->string('candidate_education_completion_year');
           $table->string('candidate_education_result_type');
           $table->string('candidate_education_result');
           $table->integer('candidate_profile_id')->nullable()->unsigned();
           $table->foreign('candidate_profile_id')->references('id')->on('candidate_profiles')->onUpdate('SET NULL')->onDelete('set null');
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
