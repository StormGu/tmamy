<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('id');

            $table->string('main_category');
            $table->integer('category_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('offer_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('account_type_id')->nullable();
            $table->integer('store_account_type_id')->nullable();
            $table->string('title');
            $table->string('name');
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->date('start_date');
            $table->date('expiry_date');
            $table->string('logo_file_name');
            $table->string('background_file_name');
            $table->string('description');
            $table->string('address');
            $table->string('phone_no');
            $table->string('fax');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('url');
            $table->string('pob');
            $table->string('cr_no');
            $table->string('company_name');

            $table->bigInteger('like_count')->nullable();
            $table->bigInteger('visit_count')->nullable();
            $table->integer('category_count')->nullable();
            $table->bigInteger('adv_counter')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('rating_count')->nullable();
            $table->float('rating_avg')->nullable();
            $table->boolean('is_veriied')->nullable();
            $table->boolean('receive_voucher')->nullable();
            $table->string('background_color');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google_plus');
            $table->string('linkedin');
            $table->string('pinterest');

            $table->enum('status', ['approved', 'blocked', 'draft_ad', 'expired', 'waiting_approval']);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('store');
    }
}
