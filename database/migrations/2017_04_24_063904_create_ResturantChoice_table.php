<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('resturant_choice', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('store')->onDelete('cascade');

            $table->string('title');
            $table->integer('max_choose_no')->nullable();
            $table->integer('min_choose_no')->nullable();
            $table->boolean('is_deleted')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('resturant_choice');
    }
}
