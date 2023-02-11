<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_payment_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('quote_id')->nullable();
            $table->integer('order_code')->nullable();
            $table->integer('status')->nullable();
            $table->longText('failure_message')->nullable();
            $table->string('reference_no')->nullable();
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
        Schema::dropIfExists('quote_payment_details');
    }
}
