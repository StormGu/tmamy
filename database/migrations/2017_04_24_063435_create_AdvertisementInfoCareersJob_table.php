<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoCareersJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_careers_job', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advertisement_id')->nullable();
            $table->string('company_name');
            $table->string('company_over_view');
            $table->string('company_address');
            $table->string('company_phone_no');
            $table->string('company_website');
            $table->integer('company_size_id')->nullable();
            $table->string('contact_email');
            $table->integer('career_level_id')->nullable();
            $table->integer('work_experience_id')->nullable();
            $table->integer('education_level_id')->nullable();
            $table->integer('employment_status_id')->nullable();
            $table->integer('gender_id')->nullable();
            $table->float('salary_from')->nullable();
            $table->float('salary_to')->nullable();
            $table->integer('currency_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('advertisement_info_careers_job');
    }
}
