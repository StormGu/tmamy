<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteJobCareerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::dropIfExists('advertisement_info_careers_job_sector');
        Schema::dropIfExists('advertisement_info_careers_job_work_experience');
        Schema::dropIfExists('advertisement_info_careers_job_work_experience_translation');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

    }
}
