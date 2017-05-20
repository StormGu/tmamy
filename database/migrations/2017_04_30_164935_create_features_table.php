<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0)->nullable();
            $table->integer('lft')->unsigned()->nullable();
            $table->integer('rgt')->unsigned()->nullable();
            $table->integer('depth')->unsigned()->nullable();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('category_feature', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('feature_id')->unsigned();
            $table->foreign('feature_id', 'cf_feature_id_foreign')
                ->references('id')
                ->on('features')
                ->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id', 'cf_category_id_foreign')
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
    public function down()
    {
        Schema::dropIfExists('category_feature');
        Schema::dropIfExists('features');
    }
}
