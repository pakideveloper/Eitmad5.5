<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('cnic');
            $table->string('contact_number');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('nationality');
            $table->integer('area_id')->nullable()->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onUpdate('SET NULL')->onDelete('set null');
            $table->integer('city_id')->nullable()->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('set null');  
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
