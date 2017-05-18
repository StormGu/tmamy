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
    public function up() {
        Schema::create('advertisement_info_tender', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('advertisement_id')->unsigned();
            $table->foreign('advertisement_id', 'ait_adv_id_foreign')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('tender_ref_no')->nullable();
            $table->integer('tender_value')->nullable();
            $table->integer('document_cost')->nullable();
            $table->date('announcement_date')->nullable();
            $table->integer('tender_value_currency_id')->nullable();
            $table->integer('document_cost_currency_id')->nullable();
            $table->date('opening_date')->nullable();
            $table->string('opening_time')->nullable();
            $table->date('last_collection_date')->nullable();
            $table->string('address')->nullable();
            $table->string('organisation_name')->nullable();
            $table->string('organisation_street')->nullable();
            $table->integer('organisation_country_id')->nullable();
            $table->integer('organisation_city_id')->nullable();
            $table->string('organisation_phone')->nullable();
            $table->string('organisation_fax')->nullable();
            $table->string('organisation_email')->nullable();

            $table->string('contact_person')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('advertisement_info_tender');
    }
}
