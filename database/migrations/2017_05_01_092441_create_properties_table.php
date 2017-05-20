<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('type')->nullable();
            $table->string('key')->nullable();
            $table->string('label')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('category_properties', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned();
            $table->foreign('property_id', 'cp_property_id_foreign')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id', 'cp_category_id_foreign')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('category_properties');
        Schema::dropIfExists('properties');
    }
}
