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
    protected $fillable = ['type', 'key', 'name', 'label', 'category_id'];
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

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function advertisements() {
        return $this->belongsToMany(Advertisement::class, 'advertisement_property', 'property_id', 'advertisement_id');
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
