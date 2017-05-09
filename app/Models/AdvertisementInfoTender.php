<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementInfoTender extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'advertisement_info_tender';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisement_id',
        'tender_ref_no',
        'tender_value',
        'document_cost',
        'announcement_date',
        'tender_value_currency_id',
        'document_cost_currency_id',
        'opening_date',
        'opening_time',
        'last_collection_date',
        'address',
        'organisation_name',
        'organisation_street',
        'organisation_country_id',
        'organisation_city_id',
        'organisation_phone',
        'organisation_fax',
        'organisation_email',
        'contact_person'
    ];
    // protected $hidden = [];
    protected $dates = [
        'announcement_date',
        'opening_date',
        'last_collection_date',
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

    public function advertisement() {
        return $this->belongsTo(Advertisement::class);
    }

    public function value_currency() {
        return $this->belongsTo(Constant::class, 'tender_value_currency_id', 'id');
    }

    public function cost_currency() {
        return $this->belongsTo(Constant::class, 'document_cost_currency_id', 'id');
    }

    public function organisation_country() {
        return $this->belongsTo(Country::class);
    }

    public function organisation_city() {
        return $this->belongsTo(City::class);
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
