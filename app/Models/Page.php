<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    	'id'
    ];
    protected $fillable = [
        'template','name','title','slug','content','extras'

    ];
    protected $hidden = [
        'user_id',
        'token',
        'ip_address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}