<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{

    public function postmsg(Request $request) {

        $msg = new Message();
        $msg->fill($request->except('_token'));
        $msg->save();

        return redirect('profile/Message/getformmsg/' . $request->to_user_id)->withMessage([
            'type' => 'success',
            'message' => trans('common.success_sent')
        ]);
    }

    public function inbox() {




        $user_msg = Message::where('from_user_id', \Auth::id())->get();
        $user_msgto = Message::where('to_user_id', \Auth::id())->get();
        $user_name = User::where('id', \Auth::id())->get();

        foreach ($user_name as $key) {
            $key->name;
            $key->id;
        }

        $user_nm = $key->name;
        $user_id = $key->id;

        return view('adforest.profile.Message', compact('user_msg', 'user_nm', 'user_id'));
    }

    public function getformmsg($id) {

        $user_msg = Message::where('from_user_id', $id)->get();

        $user_name = User::where('id', $id)->get();
        foreach ($user_name as $key) {
            $key->name;
            $key->id;
        }

        $user_nm = $key->name;
        $user_id = $key->id;

        return view('adforest.profile.Message', compact('user_msg', 'user_nm', 'user_id'));
    }
}
