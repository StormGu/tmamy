<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantChoicesItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_choices_item', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('store_id')->nullable();
            $table->integer('advertisement_id')->nullable();
            $table->integer('choice_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->float('price');

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
        Schema::dropIfExists('resturant_choices_item');
    }
}
