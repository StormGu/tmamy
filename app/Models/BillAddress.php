<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BillAddress extends Model
{
    /*
      |--------------------------------------------------------------------------
      | GLOBAL VARIABLES
      |--------------------------------------------------------------------------
      */

    protected $table = 'bill_address';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'service_id',
        'service_type_id',
        'customer_id',
        'account_type_id',
        'first_name',
        'last_name',
        'country_id',
        'city_id',
        'region_id',
        'address',
        'phone_no',
        'mobile_no',
        'email',
        'fax',
        'id_no'
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

    public function advertisement (){
        return $this->belongsTo(Advertisement::class);
    }

    public function service (){
    }

    public function customer (){
        return $this->belongsTo(User::class);
    }

    public function account_type (){
    }

    public function country (){
        return $this->belongsTo(Country::class);
    }

    public function city (){
        return $this->belongsTo(City::class);
    }

    public function region (){

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
