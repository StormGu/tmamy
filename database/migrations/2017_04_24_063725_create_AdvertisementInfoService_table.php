<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoServiceTable extends Migration
{

    public function up() {
        Schema::create('advertisement_info_service', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id', 'ais_adv_id_foreign')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('advertiser_name')->nullable();
            $table->string('email')->nullable();
            $table->text('my_services')->nullable();

            $table->timestamps();
        });
    }

    public function down() {

        Schema::dropIfExists('advertisement_info_service');
    }
}
