<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoCareersResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_careers_resume', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('advertisement_id')->nullable();
            $table->string('advertiser_name');
            $table->integer('gender_id')->nullable();
            $table->integer('education_level_id')->nullable();
            $table->string('specialist');
            $table->date('dob');
            $table->string('email');
            $table->string('skills');
            $table->string('resume_file_name');
            $table->integer('country_id');
            $table->string('id_no');

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
        Schema::dropIfExists('advertisement_info_careers_resume');
    }
}
