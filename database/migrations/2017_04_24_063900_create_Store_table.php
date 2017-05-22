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
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('logo_file_name')->nullable();
            $table->string('background_file_name')->nullable();
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('pob')->nullable();
            $table->string('cr_no')->nullable();
            $table->string('company_name')->nullable();

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
            $table->string('background_color')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();

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
