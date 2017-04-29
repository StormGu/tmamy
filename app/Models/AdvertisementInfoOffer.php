<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementInfoOffer extends Model
{

  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */

    protected $table = 'advertisement_info_offer';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisement_id',
        'new_price',
        'saving_price',
        'discount_ratio',
        'quantity',
        'start_date',
        'expiry_date',
        'company_name',
        'company_address',
        'company_phone',
        'company_fax',
        'company_email',
        'company_website',
    ];
    // protected $hidden = [];
    protected $dates = [
        'start_date',
        'expiry_date',
    ];

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
    public function advertisement (){
        return $this->belongsTo(Advertisement::class);

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
