<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paper_post_title'); 
            $table->string('paper_logo'); 
            $table->string('paper_name'); 
            $table->string('paper_ad');
            $table->string('paper_ad_size'); 
            $table->string('paper_ad_type');
            $table->string('paper_ad_extension');
            $table->string('posted_by');  
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
