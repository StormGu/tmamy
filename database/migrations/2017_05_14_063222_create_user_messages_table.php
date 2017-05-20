<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_messages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('to_user_id')->unsigned();
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('from_user_id')->unsigned();
            $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('messages', 500);
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
        Schema::dropIfExists('user_messages');
    }
}
