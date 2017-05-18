<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoHealthHospitalScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('advertisement_info_health_hospital_schedule', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id', 'aihhsc_adv_id_foreign')
                ->references('id')
                ->on('advertisement')
                ->onDelete('cascade');

            $table->string('day');
            $table->string('from_time');
            $table->string('to_time');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('advertisement_info_health_hospital_schedule');
    }
}
