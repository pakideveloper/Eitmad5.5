<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name'); 
            $table->string('company_logo'); 
            $table->string('company_address'); 
            $table->string('company_phone'); 
            $table->string('company_ceo_info'); 
            $table->integer('industry_id')->nullable()->unsigned();
            $table->foreign('industry_id')->references('id')->on('industries')->onUpdate('cascade')->onDelete('cascade');            
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
