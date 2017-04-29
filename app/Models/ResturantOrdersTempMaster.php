<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResturantOrdersTempMaster extends Model
{
    /*
      |--------------------------------------------------------------------------
      | GLOBAL VARIABLES
      |--------------------------------------------------------------------------
      */

    protected $table = 'resturant_orders_temp_master';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'store_id',
        'customer_id',
        'customer_guid',
        'total_price',
        'delivery_price',
        'tax_price',
        'master_discount',
        'details_discount',
        'total_discount',
        'net_value',
        'currency_id',
        'country_id',
        'order_date',
        'delivery_date',
        'meal_status_id',
        'notes'
    ];
    // protected $hidden = [];
    protected $dates = [
        'order_date',
        'delivery_date',
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

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function customer() {}

    public function currency() {}

    public function country() {
        return $this->belongsTo( Country::class);
    }

    public function meal_status() {}

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
