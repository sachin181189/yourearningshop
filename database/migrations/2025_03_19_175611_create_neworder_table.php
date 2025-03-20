<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('order', function (Blueprint $table) {
                $table->id();
                $table->string('order_id');
                $table->integer('user_name');
                $table->integer('user_email');
                $table->integer('user_phone');
                $table->string('coupon_code');
                $table->string('coupon_amount');
                $table->string('shipping_method');
                $table->string('shipping_charge');
                $table->string('payment_id');
                $table->string('payment_method');
                $table->string('sub_total');
                $table->string('grand_total');
                $table->string('shipping_address');
                $table->string('billing_address');
                $table->integer('order_status');
                $table->integer('payment_status');
                $table->string('order_date')->default('');
                $table->string('delivery_date')->default('');
                $table->string('cancel_date')->default('');
                $table->string('cancel_note')->default('');
                $table->string('prefered_time')->default('');
                $table->integer('assigned_driver')->default('0');
                $table->string('driver_name')->default('');
                $table->string('driver_email')->default('');
                $table->string('driver_phone')->default('');
                $table->string('alternate_mobile')->default('');
                $table->string('invoice_file')->default('');
                $table->string('vendor_invoice_file')->default('');
                $table->string('invoice_no')->default('');
                $table->string('vendor_invoice_no')->default('');
                $table->integer('is_same_as_shipping_address')->default(0)->comment('0=>No,1=>Yes');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
