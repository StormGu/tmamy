<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PromotionOrder extends Model
{
    /*
      |--------------------------------------------------------------------------
      | GLOBAL VARIABLES
      |--------------------------------------------------------------------------
      */

    protected $table = 'promotion_order';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'promotion_type_id',
        'promotion_item_id',
        'customer_id',
        'country_id',
        'offer_id',
        'view_order',
        'view_counter',
        'status',
        'weight',
        'is_deleted',
        'title',
        'link',
        'description',
        'logo_file_name',
        'cover_file_name',
        'button_title_id'
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

    public function promotion_type() {

    }

    public function promotion_item() {

    }

    public function customer() {
           return $this->belongsTo(User::class);
    }

    public function country() {
       return $this->belongsTo(Country::class);
    }

    public function offer() {

    }

    public function button_title() {

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
