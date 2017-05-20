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
    public function up() {
        schema::create('advertisement', function (blueprint $table) {
            $table->increments('id');

            $table->string('advertisementno')->nullable();
            $table->string('category_id')->nullable();
            $table->string('subcategory_id')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id', 'au_id_foreign')->references('id')->on('users')->onDelete('cascade');

            $table->integer('account_type_id')->nullable();
            $table->integer('advertisment_type_id')->nullable();
            $table->integer('advertisement_positions_id')->nullable();
            $table->integer('magazine_status')->nullable();
            $table->integer('magazine_version_id')->nullable();
            $table->integer('magazine_page_no_id')->nullable();
            $table->string('magazine_filename')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('storecategory_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('region_id')->nullable();

            $table->string('title')->nullable();
            $table->text('details')->nullable();
            $table->text('details_summary')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('image_filename')->nullable();
            $table->string('video_filename')->nullable();
            $table->date('advertisment_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->double('price')->nullable();
            $table->integer('currency_id')->nullable();
            $table->double('discount')->nullable();
            $table->integer('language_id')->nullable();
            $table->biginteger('visits')->default(0);
            $table->biginteger('love_count')->default(0);
            $table->biginteger('view_count')->default(0);
            $table->double('rating_avg')->nullable();
            $table->integer('rating_count')->nullable();
            $table->boolean('show_mobile_no')->nullable();
            $table->boolean('send_message')->nullable();
            $table->double('lon')->nullable();
            $table->double('lat')->nullable();
            $table->double('weight')->nullable();
            $table->double('rate')->nullable();
            $table->boolean('top_list')->nullable();
            $table->boolean('is_free')->nullable();
            $table->boolean('is_deleted')->nullable();

            $table->boolean('receive_voucher')->nullable();
            $table->date('is_dis_appear')->nullable();

            $table->enum('status', [
                'approved',
                'blocked',
                'draft',
                'expired',
                'rejected',
                'waiting_approval',
                'waiting_edit_approval'
            ]);

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * reverse the migrations.
     *
     * @return void
     */
    public function down() {
        schema::dropifexists('advertisement');
    }
}
