<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoExhibitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_exhibition', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('advertisement_id')->nullable();
            $table->string('interval');
            $table->date('founded_date');
            $table->integer('venue_country_id')->nullable();
            $table->integer('venue_city_id')->nullable();
            $table->string('venue_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('from_time');
            $table->string('to_time');
            $table->integer('currency_id')->nullable();
            $table->string('space');
            $table->float('from_price')->nullable();
            $table->float('to_price')->nullable();
            
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
        Schema::dropIfExists('advertisement_info_exhibition');
    }
}
