<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;

class AdvertisementInfoCareersJob extends Model
{
    /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    protected $table = 'advertisement_info_careers_job';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'advertisement_id',
        'company_name',
        'company_over_view',
        'company_address',
        'company_phone_no',
        'company_website',
        'company_size_id',
        'contact_email',
        'career_level_id',
        'work_experience_id',
        'education_level_id',
        'employment_status_id',
        'gender_id',
        'salary_from',
        'salary_to',
        'currency_id',
        'date',
    ];
    // protected $hidden = [];
    protected $dates = ['date'];

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

    public function work_experience() {
        return $this->belongsTo(Constant::class, 'work_experience_id', 'id');
    }

    public function company_size() {
        return $this->belongsTo(Constant::class, 'company_size_id', 'id');
    }

    public function career_level() {
        return $this->belongsTo(Constant::class, 'career_level_id', 'id');
    }

    public function education_level() {
        return $this->belongsTo(Constant::class, 'education_level_id', 'id');
    }

    public function employment_status() {
        return $this->belongsTo(Constant::class, 'employment_status_id', 'id');
    }

    public function gender() {
        return $this->belongsTo(Constant::class, 'gender_id', 'id');
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
