<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoCareersResumeExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_careers_resume_experience', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advertisement_id')->nullable();
            $table->string('company_name');
            $table->string('company_position');
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
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
        Schema::dropIfExists('advertisement_info_careers_resume_experience');
    }
}
