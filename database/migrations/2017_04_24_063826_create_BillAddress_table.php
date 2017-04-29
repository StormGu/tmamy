<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_address', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('service_id')->nullable();
            $table->integer('service_type_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('account_type_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->string('address');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('fax');
            $table->string('id_no');

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
        Schema::dropIfExists('bill_address');
    }
}
