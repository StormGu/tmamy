<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
class MessageController extends Controller
{
      public function postmsg(Request $request){

          $msg = new Message();
          $Input = $request->all();
          
           $msg->from_name = $Input['from_name'];
           $msg->to_user_id = $Input['to_user_id'];
           $msg->from_user_id = $Input['from_user_id'];
           $msg->messages = $Input['messages'];
           $msg->save();

          return redirect()->back();


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
