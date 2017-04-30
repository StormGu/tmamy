<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStoreDeletedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('store', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->softDeletes();
        });

        Schema::table('store', function (Blueprint $table) {
            $table->enum('status', ['approved', 'blocked', 'draft_ad', 'expired', 'waiting_approval']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
