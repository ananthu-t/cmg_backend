<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cu_id')->nullable();
            $table->string('fname')->nullable();
            $table->string('order_id')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('amount')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('discount_amount')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('payment_status')->nullable();
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
        Schema::dropIfExists('payment_details');
    }
}
