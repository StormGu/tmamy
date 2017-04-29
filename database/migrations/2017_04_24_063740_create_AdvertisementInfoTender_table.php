<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementInfoTenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_info_tender', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->nullable();
            $table->string('tender_ref_no');
            $table->integer('tender_value')->nullable();
            $table->integer('document_cost')->nullable();
            $table->date('announcement_date');
            $table->integer('tender_value_currency_id')->nullable();
            $table->integer('document_cost_currency_id')->nullable();
            $table->date('opening_date');
            $table->string('opening_time');
            $table->date('last_collection_date');
            $table->string('address');
            $table->string('organisation_name');
            $table->string('organisation_street');
            $table->integer('organisation_country_id')->nullable();
            $table->integer('organisation_city_id')->nullable();
            $table->string('organisation_phone');
            $table->string('organisation_fax');
            $table->string('organisation_email');

            $table->string('contact_person');

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
        Schema::dropIfExists('advertisement_info_tender');
    }
}
