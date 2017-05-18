<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_item', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('store')->onDelete('cascade');

            $table->string('title');
            $table->float('price')->nullable();
            $table->boolean('is_deleted')->nullable();

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
        Schema::dropIfExists('resturant_item');
    }
}
