<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryZoneTable extends Migration
{
    public function up() {
        Schema::create('countries', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name', 128);
            $table->string('iso_code_2', 2);
            $table->string('iso_code_3', 3);
            $table->text('address_format')->nullable();
            $table->tinyInteger('postcode_required')->default(0);
            $table->tinyInteger('status')->default(1);
        });

        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('name', 128);
            $table->string('code', 32)->nullable();
            $table->tinyInteger('status')->default(1);
        });
    }

    public function down() {
        Schema::drop('zones');
        Schema::drop('countries');
    }
}
