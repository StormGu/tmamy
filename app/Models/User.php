<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use CrudTrait;
    // use HasRoleAndPermission;
    use Notifiable;
    use SoftDeletes;
    use HasRoles;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
        'activated',
        'token',
        'signup_ip_address',
        'signup_confirmation_ip_address',
        'signup_sm_ip_address',
        'admin_ip_address',
        'updated_ip_address',
        'deleted_ip_address',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'activated',
        'token',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $appends = [
        'CountFollowers',
        'CountFollowing'
    ];


    /**
     * Build Social Relationships
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function social() {
        return $this->hasMany('App\Models\Social');
    }

    /**
     * User Profile Relationships
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile() {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function coupons() {
        return $this->belongsToMany(Coupon::class, 'user_coupons');
    }

    // User Profile Setup - SHould move these to a trait or interface...
    //
    //    public function profiles() {
    //        return $this->belongsToMany('App\Models\Profile')->withTimestamps();
    //    }
    //
    //    public function hasProfile($name) {
    //        foreach ($this->profiles as $profile) {
    //            if ($profile->name == $name)
    //                return true;
    //        }
    //
    //        return false;
    //    }
    //
    //    public function assignProfile($profile) {
    //        return $this->profiles()->attach($profile);
    //    }
    //
    //    public function removeProfile($profile) {
    //        return $this->profiles()->detach($profile);
    //    }

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function getNameAttribute($name) {

        return $this->first_name . ' ' . $this->last_name;
    }


    function followers() {
        return $this->hasMany(UserFollower::class);
        //   return $this->belongsToMany('App\Models\User', 'user_followers', 'user_id', 'user_followers_id');
    }

    /**
     * Get the list of followers of this user.
     *
     * @return bool
     */
    public function getCountFollowersAttribute() {
        return $this->followers()->where('user_followers_id', \Auth::id())->count();
    }


    /**
     * Get the list of followers of this user.
     *
     * @return bool
     */
    public function getCountFollowingAttribute() {
        return $this->followers()->where('user_id', \Auth::id())->count();
    }


    function follow(User $user) {
        $this->followers()->attach($user->id);
    }

    function unfollow(User $user) {
        $this->followers()->detach($user->id);
    }


    /**
     * User Profile Relationships
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stores() {
        return $this->hasMany(Store::class);
    }


    /**
     * User Profile Relationships
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function advertisements() {
        return $this->hasMany(Advertisement::class);
    }


}
