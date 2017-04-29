<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    /*
 |--------------------------------------------------------------------------
 | GLOBAL VARIABLES
 |--------------------------------------------------------------------------
 */

    protected $table = 'store';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = [
         'main_category',
         'category_id',
         'type_id',
         'offer_id',
         'customer_id',
         'account_type_id',
         'store_account_type_id',
         'title',
         'name',
         'country_id',
         'city_id',
         'region_id',
         'start_date',
         'expiry_date',
         'logo_file_name',
         'background_file_name',
         'description',
         'address',
         'phone_no',
         'fax',
         'mobile_no',
         'email',
         'url',
         'pob',
         'cr_no',
         'company_name',
         'like_count',
         'visit_count',
         'category_count',
         'adv_counter',
         'status',
         'is_deleted',
         'user_id',
         'rating_count',
         'rating_avg',
         'is_veriied',
         'receive_voucher',
         'background_color',
         'facebook',
         'twitter',
         'google_plus',
         'linkedin',
         'pinterest',
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
       public function category()
       {
           return $this->belongsTo(Category::class);
       }

       public function type()
       {

       }

       public function offer()
       {
           return $this->belongsTo( AdvertisementInfoOffer::class);
       }

       public function customer()
       {
           return $this->belongsTo( User::class);
       }

       public function account()
       {

       }

       public function store()
       {

       }

       public function country()
       {
           return $this->belongsTo(Country::class);
       }

       public function city()
       {
           return $this->belongsTo(City::class);
       }

       public function region()
       {

       }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
