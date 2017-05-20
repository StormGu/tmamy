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

            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id', 'lovd_parent_id_foreign')
                ->references('id')
                ->on('list_of_values')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('list_of_values_details');
        Schema::dropIfExists('list_of_values');
    }
}
