<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGadgetPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadget_plans', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('creator_id')->nullable();
            $table->foreign('creator_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->unsignedInteger('updater_id')->nullable();
            $table->foreign('updater_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->string('gadget_id');
            $table->string('start_range');
            $table->string('end_range');
            $table->string('monthly_price');
            $table->string('yearly_price');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('gadget_plans');
    }
}
