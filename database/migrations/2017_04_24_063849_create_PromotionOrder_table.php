<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_order', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('promotion_type_id')->nullable();
            $table->integer('promotion_item_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('offer_id')->nullable();
            $table->integer('view_order')->nullable();
            $table->integer('view_counter')->nullable();
            $table->integer('status')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('is_deleted');
            $table->string('title');
            $table->string('link');
            $table->text('description');
            $table->string('logo_file_name');
            $table->string('cover_file_name');
            $table->integer('button_title_id')->nullable();

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
        Schema::dropIfExists('promotion_order');
    }
}
