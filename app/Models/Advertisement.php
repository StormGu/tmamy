<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


class Advertisement extends Model
{
    use CrudTrait;
    use softDeletes;

    /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    protected $table = 'advertisement';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisementno',
        'category_id',
        'account_type_id',
        'customer_id',
        'advertisment_type_id',
        'advertisement_positions_id',
        'magazine_status',
        'magazine_version_id',
        'magazine_page_no_id',
        'magazine_filename',
        'store_id',
        'storecategory_id',
        'country_id',
        'city_id',
        'region_id',
        'title',
        'details',
        'mobile_no',
        'phone_no',
        'image_filename',
        'video_filename',
        'advertisment_date',
        'expiry_date',
        'price',
        'currency_id',
        'discount',
        'language_id',
        'visits',
        'love_count',
        'view_count',
        'rating_avg',
        'rating_count',
        'show_mobile_no',
        'send_message',
        'lon',
        'lat',
        'weight',
        'rate',
        'top_list',
        'is_free',
        'is_deleted',
        'user_id',
        'receive_voucher',
        'is_dis_appear'
    ];
    // protected $hidden = [];
    // protected $dates = [];
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function currency() {
        return $this->belongsTo(Constant::class, 'currency_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function customer() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function magazine_version() {
        return $this->belongsTo(Category::class);
    }

    public function magazine_page_no() {
        return $this->belongsTo(Category::class);
    }

    public function features() {
        return $this->belongsToMany(Feature::class, 'advertisement_feature', 'advertisement_id', 'feature_list_id');
    }

    public function properties() {
        return $this->belongsToMany(Property::class, 'advertisement_property', 'advertisement_id', 'property_id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeSponsered($query) {
        return $query->where('top_list', 1);
    }

    public function scopeApproved($query) {
        return $query->whereStatus('Approved');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

}
