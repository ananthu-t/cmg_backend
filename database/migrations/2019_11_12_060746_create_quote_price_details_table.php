<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotePriceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_price_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('quote_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('order_id')->nullable();
            $table->integer('frequency')->nullable();
            $table->string('currency_code')->nullable();
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
        Schema::dropIfExists('quote_price_details');
    }
}
