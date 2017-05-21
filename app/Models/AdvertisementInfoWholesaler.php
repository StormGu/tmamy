<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementInfoWholesaler extends Model
{

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'advertisement_info_wholesaler';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisement_id',
        'price_to',
        'min_quantity',
        'term_delivery_id',
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

    public function currency() {
        return $this->belongsTo(Constant::class, 'currency_id', 'id');
    }

    public function advertisement() {
        return $this->belongsTo(Advertisement::class);
    }

    public function term_delivery() {
        return $this->belongsTo(Constant::class, 'term_delivery_id', 'id');
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
