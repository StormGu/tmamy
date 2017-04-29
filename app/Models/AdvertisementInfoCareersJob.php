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
     protected $dates = [ 'date'];
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

    public function CompanySize()
    {

    }

    public function CareerLevel()
    {

    }

    public function work_experience()
    {

    }

    public function EducationLevel()
    {

    }

    public function EmploymentStatus()
    {

    }

    public function gender()
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
