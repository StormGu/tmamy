<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantOrdersTempDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_orders_temp_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('master_id')->nullable();
            $table->integer('advertisement_id')->nullable();
            $table->float('price')->nullable();
            $table->float('details_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('discount')->nullable();
            $table->float('total_price')->nullable();
            $table->integer('currency_id')->nullable();
            $table->text('notes');

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
        Schema::dropIfExists('resturant_orders_temp_detail');
    }
}
