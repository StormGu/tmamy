<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendCategoriesTable extends Migration
{

    public function up() {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->string('bgcolor')->nullable();
        });
    }

    public function down() {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('bgcolor');
        });
    }
}
