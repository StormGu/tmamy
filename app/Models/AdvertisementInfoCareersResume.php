<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;

class AdvertisementInfoCareersResume extends Model
{
    /*
|--------------------------------------------------------------------------
| GLOBAL VARIABLES
|--------------------------------------------------------------------------
*/
    protected $table = 'advertisement_info_careers_resume';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisement_id',
        'advertiser_name',
        'gender_id',
        'education_level_id',
        'specialist',
        'dob',
        'email',
        'skills',
        'resume_file_name',
        'country_id',
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
    public function advertisement() {
        return $this->belongsTo(Advertisement::class, 'advertisement_id', 'id');
    }

    public function gender() {
        return $this->belongsTo(Constant::class, 'gender_id', 'id');
    }

    public function education_level() {
        return $this->belongsTo(Constant::class, 'education_level_id', 'id');
    }

    public function country() {
        return $this->belongsTo(Country::class);
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
