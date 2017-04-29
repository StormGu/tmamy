<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;

class AdvertisementInfoExhibition extends Model
{
       /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $table = 'advertisement_info_exhibition';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisement_id',
        'interval',
        'founded_date',
        'venue_country_id',
        'venue_city_id',
        'venue_name',
        'start_date',
        'end_date',
        'from_time',
        'to_time',
        'currency_id',
        'space',
        'from_price',
        'to_price'
    ];
    // protected $hidden = [];
    protected $dates = [
        'start_date',
        'end_date'
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
     public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function VenueCountry()
    {

    }
    public function VenueCity()
    {

    }
    public function currency()
    {

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
