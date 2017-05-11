<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendsProfileTable extends Migration
{

    public function up() {
        Schema::table('profiles', function (Blueprint $table) {
            $table->integer('points')->default(0);
        });
    }

    public function down() {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('points');
        });
    }
}
