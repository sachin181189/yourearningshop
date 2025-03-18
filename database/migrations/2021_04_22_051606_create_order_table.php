<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->integer('user_id');
            $table->string('coupon_code');
            $table->string('coupon_amount');
            $table->integer('shipping_method');
            $table->string('shipping_charge');
            $table->string('payment_id');
            $table->string('payment_method');
            $table->string('sub_total');
            $table->string('grand_total');
            $table->integer('shipping_address');
            $table->integer('order_status');
            $table->integer('payment_status');
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
        Schema::dropIfExists('order');
    }
}
