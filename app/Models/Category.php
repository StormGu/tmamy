<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use App\Traits\NPerGroup;

class Category extends Model
{

    use CrudTrait;
    use HasTranslations;
    use NPerGroup;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'categories';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name'];
    // protected $hidden = [];
    // protected $dates = [];
    public $translatable = ['name'];

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

    public function advertisements() {
        return $this->hasMany(Advertisement::class, 'category_id', 'id');
    }


    public function latestAdvertisements()
    {
         return $this->advertisements()->latest()->nPerGroup('category_id', 2);
    }


    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }



    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function adchildren() {
        return $this->hasMany(Advertisement::class, 'category_id');
    }

    public function properties() {
        return $this->belongsToMany(Property::class, 'category_properties', 'category_id', 'property_id');
    }
    public function features() {
        return $this->belongsToMany(Feature::class, 'category_feature', 'category_id', 'feature_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeFirstLevelItems($query) {
        return $query->where('depth', '1')->orWhere('depth', null)->orderBy('lft', 'ASC');
    }

    public function scopeParents($query) {
        return $query->where('parent_id', NULL);
    }

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
