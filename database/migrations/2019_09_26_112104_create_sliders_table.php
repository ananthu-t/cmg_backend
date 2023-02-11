<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
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

            $table->string('title');
            $table->string('button_link');
            $table->string('avatar')->nullable();
            $table->string('view');
            $table->longText('description');
            $table->integer('order');
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
        Schema::dropIfExists('sliders');
    }
}
