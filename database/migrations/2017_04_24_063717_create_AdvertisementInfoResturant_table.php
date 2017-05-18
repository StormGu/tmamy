<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoResturantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('advertisement_info_resturant', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id', 'air_adv_id_foreign')
                ->references('id')
                ->on('advertisement')
                ->onDelete('cascade');

            $table->string('resturant_details')->nullable();
            $table->string('address_main')->nullable();
            $table->string('address_details')->nullable();
            $table->string('fax')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('web')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('advertisement_info_resturant');
    }
}
