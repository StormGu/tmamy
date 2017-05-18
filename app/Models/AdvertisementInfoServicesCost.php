<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementInfoServicesCost extends Model
{

    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */

    protected $table = 'advertisement_info_services_cost';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'currency_id',
        'service_title',
        'service_cost',
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $touches = ['advertisement'];
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

    public function currency() {
        return $this->belongsTo(Constant::class, 'currency_id', 'id');
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
