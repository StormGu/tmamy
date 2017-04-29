<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_health', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advertisement_id')->nullable();
            $table->string('degree_short');
            $table->string('titles');
            $table->string('practice_name');
            $table->string('specialization');
            $table->string('email');
            $table->string('address');
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
        Schema::dropIfExists('advertisement_info_health');
    }

}
