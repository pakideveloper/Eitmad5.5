<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('order_status');
            $table->string('order_shipping_address');
            $table->string('order_amount');
            $table->string('order_item');
            $table->string('shipping_charges');
            $table->string('order_tax');
            $table->string('order_amount_receivable');
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->integer('city_id')->nullable()->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->integer('discount_id')->nullable()->unsigned();
            $table->foreign('discount_id')->references('id')->on('discounts')->onUpdate('SET NULL');                
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
