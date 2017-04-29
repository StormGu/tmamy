<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

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
        'details_summary',
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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function account()
    {

    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function magazine_version()
    {
        return $this->belongsTo(Category::class);
    }

    public function magazine_page_no()
    {
        return $this->belongsTo(Category::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
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
