<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantOrdersTempDetailsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_orders_temp_details_detail', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('details_id')->nullable();
            $table->integer('choices_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->float('item_price')->nullable();

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
        Schema::dropIfExists('resturant_orders_temp_details_detail');
    }
}
