<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_certificates', function (Blueprint $table) {
           $table->increment('id');
           $table->string('candidate_certificate_name');
           $table->string('candidate_certificate_institute_name');
           $table->string('candidate_certificate_completion_date');
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
