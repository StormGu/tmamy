<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementInfoHealthDoctorClinicSchedule extends Model
{
    /*
|--------------------------------------------------------------------------
| GLOBAL VARIABLES
|--------------------------------------------------------------------------
*/

     protected $table = 'advertisement_info_health_doctor_clinic_schedule';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = [
         'advertisement_id',
         'clinic_id',
         'day',
         'from_time',
         'to_time'
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
         public function advertisement()
         {
             return $this->belongsTo(Advertisement::class);
         }

         public function clinic()
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
