<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoWholesalerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_wholesaler', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('advertisement_id')->nullable();
            $table->float('price_to')->nullable();
            $table->string('min_quantity');
            $table->integer('term_delivery_id')->nullable();
            
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
        Schema::dropIfExists('advertisement_info_wholesaler');
    }
}
