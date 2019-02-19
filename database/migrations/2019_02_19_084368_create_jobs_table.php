<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title'); 
            $table->string('job_description'); 
            $table->string('job_skills');
            $table->string('job_career_level'); 
            $table->string('job_no_of_position');  
            $table->string('job_year_of_experience'); 
            $table->string('job_degree_level_type');  
            $table->string('job_salary_range');
            $table->string('job_gender_preference'); 
            $table->boolean('job_oath_status');     
            $table->integer('company_id')->nullable()->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');;   
            $table->integer('job_type_id')->nullable()->unsigned();
            $table->foreign('job_type_id')->references('id')->on('job_types')->onUpdate('SET NULL')->onDelete('set null'); 
            $table->integer('job_sub_category_id')->nullable()->unsigned();
            $table->foreign('job_sub_category_id')->references('id')->on('job_sub_categories')->onUpdate('SET NULL')->onDelete('set null'); 
            $table->integer('city_id')->nullable()->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('set null');;
            $table->integer('degree_level_id')->nullable()->unsigned();
            $table->foreign('degree_level_id')->references('id')->on('degree_levels')->onUpdate('SET NULL')->onDelete('set null');
            $table->integer('degree_type_id')->nullable()->unsigned();
            $table->foreign('degree_type_id')->references('id')->on('degree_types')->onUpdate('SET NULL')->onDelete('set null');
            $table->integer('area_id')->nullable()->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onUpdate('SET NULL')->onDelete('set null');  
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
