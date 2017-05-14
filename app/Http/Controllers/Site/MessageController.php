<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
      public function postmsg(Request $request){

          $msg = new Message();
          $Input = $request->all();

           $msg->to_user_id = $Input['to_user_id'];
           $msg->from_user_id = $Input['form_user_id'];
          $msg->messages = $Input['messages'];
          $msg->save();

          return redirect()->back();


      }

      public function getmsg($id){
           $user_msg = Message::where('to_user_id', $id)->get();

           return view('adforest.profile.Message', compact('user_msg'));
      }
}
