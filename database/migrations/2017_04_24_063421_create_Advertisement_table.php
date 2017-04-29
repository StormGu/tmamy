<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createadvertisementtable extends migration
{
    /**
     * run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('advertisement', function (blueprint $table) {
            $table->increments('id');
            
            $table->string('advertisementno');
            $table->string('category_id');

            $table->integer('account_type_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('advertisment_type_id')->nullable();
            $table->integer('advertisement_positions_id')->nullable();
            $table->integer('magazine_status')->nullable();
            $table->integer('magazine_version_id')->nullable();
            $table->integer('magazine_page_no_id')->nullable();
            $table->string('magazine_filename');
            $table->integer('store_id')->nullable();
            $table->integer('storecategory_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('region_id')->nullable();
            
            $table->string('title');
            $table->string('details');
            $table->string('details_summary');
            $table->string('mobile_no');
            $table->string('phone_no');
            $table->string('image_filename');
            $table->string('video_filename');
            $table->date('advertisment_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->float('price')->nullable();
            $table->integer('currency_id')->nullable();
            $table->float('discount')->nullable();
            $table->integer('language_id')->nullable();
            $table->biginteger('visits')->nullable();
            $table->biginteger('love_count')->nullable();
            $table->biginteger('view_count')->nullable();
            $table->float('rating_avg')->nullable();
            $table->integer('rating_count')->nullable();
            $table->boolean('show_mobile_no')->nullable();
            $table->boolean('send_message')->nullable();
            $table->string('lon');
            $table->string('lat');
            $table->float('weight')->nullable();
            $table->float('rate')->nullable();
            $table->boolean('top_list')->nullable();
            $table->boolean('is_free')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('receive_voucher')->nullable();
            $table->date('is_dis_appear')->nullable();

            $table->enum('status', ['approved', 'blocked', 'draft', 'expired', 'rejected', 'waiting_approval', 'waiting_edit_approval']);

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropifexists('advertisement');
    }
}
