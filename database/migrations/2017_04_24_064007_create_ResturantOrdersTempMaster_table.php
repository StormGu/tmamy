<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantOrdersTempMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_orders_temp_master', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('store_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('customer_guid');
            $table->float('total_price')->nullable();
            $table->float('delivery_price')->nullable();
            $table->float('tax_price')->nullable();
            $table->float('master_discount')->nullable();
            $table->float('details_discount')->nullable();
            $table->float('total_discount')->nullable();
            $table->float('net_value')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->date('order_date');
            $table->date('delivery_date');
            $table->integer('meal_status_id')->nullable();
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('resturant_orders_temp_master');
    }
}
