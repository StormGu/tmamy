<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_property', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('property_value');
            $table->integer('list_of_value_details_id')->nullable();

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
        Schema::dropIfExists('advertisement_property');
    }
}
