<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use JWTAuth;

class MessageController extends Controller
{
    



 public function messages() {
 
    $user = JWTAuth::parseToken()->authenticate();

    $messages = Message::where('to_user_id',$user->id)->orWhere('from_user_id',$user->id)->paginate(30)->toArray(); 

    if (count($messages))
      $this->is_success = true;

    return response()->json(['success' => $this->is_success, 'message' => [], 'data' => $messages]);

    }

    
      public function postmsg(Request $request){

          $user = JWTAuth::parseToken()->authenticate();

           $msg = new Message();
           $msg->from_user_id =  $user->id;
           $msg->to_user_id = $request->to_user_id;
           $msg->messages = $request->messages;
        
      if ($msg->save())
    return response()->json(['success' => true, 'message' => ['Success Saved Message']]);

    return response()->json(['success' => $this->is_success, 'message' => ['failed !']]);

      }

      public function getmsg($id){
           $user_msg = Message::where('from_user_id', $id)->get();
             $user_name = User::where('id', $id)->get();
            foreach ($user_name as $key) {
              $key->name;
              $key->id;
            }
           
           $user_nm = $key->name;
           $user_id = $key->id;
           return view('adforest.profile.Message', compact('user_msg','user_nm','user_id'));
      }

       public function getformmsg($id){
           $user_msg = Message::where('from_user_id', $id)->get();
           
           $user_name = User::where('id', $id)->get();
            foreach ($user_name as $key) {
              $key->name;
              $key->id;
            }
           
           $user_nm = $key->name;
           $user_id = $key->id;

           return view('adforest.profile.Message', compact('user_msg','user_nm','user_id'));
      }
}
