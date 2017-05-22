<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Fillable fields for a Profile
     *
     * @var array
     */
    protected $fillable = [
        'theme_id',
        'location',
        'bio',
        'twitter_username',
        'github_username',
        'user_profile_bg',
        'avatar',
        'avatar_status',
        'bio',
        'gender_id',
        'language_id',
        'country_id',
        'city_id',
        'address',
        'dob',
        'mobile_no',

        'facebook',
        'twitter',
        'googleplus',
        'linkedin',
        'pinterest',
        'Points'
    ];

    protected $casts = [
        'theme_id' => 'integer',
    ];

    /**
     * A profile belongs to a user
     *
     * @return mixed
     */
    public function user() {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    /**
     * Profile Theme Relationships
     *
     * @var array
     */
    public function theme() {
        return $this->hasOne('App\Models\Theme');
    }


}