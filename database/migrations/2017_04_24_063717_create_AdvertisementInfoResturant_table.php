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
    public function up()
    {
        Schema::create('advertisement_info_resturant', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->nullable();
            $table->string('resturant_details');
            $table->string('address_main');
            $table->string('address_details');
            $table->string('fax');
            $table->string('phone_no');
            $table->string('web');
            $table->string('email');

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
        Schema::dropIfExists('advertisement_info_resturant');
    }
}
