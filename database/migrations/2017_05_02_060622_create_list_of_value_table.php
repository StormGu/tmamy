<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListOfValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('list_of_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
        });

        Schema::create('list_of_values_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('list_of_values');
        Schema::dropIfExists('list_of_values_details');
    }
}
