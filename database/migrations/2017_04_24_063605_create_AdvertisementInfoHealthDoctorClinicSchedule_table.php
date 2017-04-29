<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoHealthDoctorClinicScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_health_doctor_clinic_schedule', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->nullable();
            $table->integer('clinic_id')->nullable();
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
    public function down()
    {
        Schema::dropIfExists('advertisement_info_health_doctor_clinic_schedule');
    }
}
