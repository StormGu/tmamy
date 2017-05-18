<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstantsTable extends Migration
{

    public function up() {
        Schema::create('constants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('value');
        });
    }

    public function down() {
        Schema::dropIfExists('constants');
    }
}
