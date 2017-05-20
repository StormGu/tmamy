<?php

namespace App\Models;

use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Property extends Model
{
    use CrudTrait;
    use HasTranslations;

    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */

    //protected $table = 'propertys';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['type', 'key', 'name', 'label'];
    // protected $hidden = [];
    // protected $dates = [];
    public $translatable = ['label'];
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

    public function listofvalue() {
        return $this->belongsTo(ListOfValue::class, 'key', 'id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_properties', 'property_id', 'category_id');
    }

    public function advertisements() {
        return $this->belongsToMany(Advertisement::class, 'advertisement_property', 'property_id', 'advertisement_id')->withTimestamps();
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
