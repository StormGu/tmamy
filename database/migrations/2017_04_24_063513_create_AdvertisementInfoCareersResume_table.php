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
    public function up() {
        Schema::create('advertisement_info_careers_resume', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id', 'aicr_id_foreign')
                ->references('id')
                ->on('advertisement')
                ->onDelete('cascade');

            $table->string('advertiser_name')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('education_level_id')->nullable();
            $table->string('specialist')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('skills')->nullable();
            $table->string('resume_file_name')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('id_no')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('advertisement_info_careers_resume');
    }
}
