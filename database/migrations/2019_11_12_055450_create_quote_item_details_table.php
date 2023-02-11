<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteItemDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_item_details', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('quote_id')->nullable();
            $table->integer('device_type_id')->nullable();
            $table->integer('make_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('imei')->nullable();
            $table->integer('range_id')->nullable();
            $table->integer('loss_cover')->nullable();
            $table->string('item_addedon')->nullable();
            $table->longText('others')->nullable();
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
        Schema::dropIfExists('quote_item_details');
    }
}
