<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /*
|--------------------------------------------------------------------------
| GLOBAL VARIABLES
|--------------------------------------------------------------------------
*/

     protected $table = 'user_messages';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = [
         'to_user_id',
         'from_user_id',
         'messages'
     ];
     protected $appends = [
         'sender_name',
         'recipient_name'
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

        public function user(){
            return $this->belongsTo(User::class);
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

   public function getSenderNameAttribute($value)
    {
     $this->sender = \DB::table($this->table)
                ->join('users', function ($join) {
                    $join->on('users.id', '=', $this->table.'.from_user_id');
                })
                ->where($this->table.'.id', $this->id)
              //  ->orderBy('supports.recipient_admin', 'desc')
                ->value('users.first_name');
        
        return $this->sender;   
         }

    public function getRecipientNameAttribute($value)
    {
             $this->recipient = \DB::table($this->table)
                ->join('users', function ($join) {
                    $join->on('users.id', '=', $this->table.'.to_user_id');
                })
                ->where($this->table.'.id', $this->id)
              //  ->orderBy('supports.recipient_admin', 'desc')
                ->value('users.first_name');
        
        return $this->recipient;
    }


    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
