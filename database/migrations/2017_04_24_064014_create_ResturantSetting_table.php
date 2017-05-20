<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantSettingTable extends Migration
{

    public function up() {
        Schema::create('resturant_setting', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('store')->onDelete('cascade');

            $table->integer('language_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->float('minimum_order_amount')->nullable();
            $table->string('working_from');
            $table->string('working_to');
            $table->boolean('delivery_possibility')->nullable();
            $table->float('delivery_charge')->nullable();
            $table->integer('delivery_time_from')->nullable();
            $table->integer('delivery_time_to')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('resturant_setting');
    }
}
