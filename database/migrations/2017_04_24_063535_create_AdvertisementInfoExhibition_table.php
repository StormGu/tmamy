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
    public function up() {
        Schema::create('advertisement_info_exhibition', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id', 'aie_id_foreign')
                ->references('id')
                ->on('advertisement')
                ->onDelete('cascade');

            $table->string('interval')->nullable();
            $table->date('founded_date')->nullable();
            $table->integer('venue_country_id')->nullable();
            $table->integer('venue_city_id')->nullable();
            $table->string('venue_name')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('space')->nullable();
            $table->decimal('from_price', 7, 2)->nullable();
            $table->float('to_price', 7, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('advertisement_info_exhibition');
    }
}
