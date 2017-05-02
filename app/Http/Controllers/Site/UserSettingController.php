<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\UserSettingRequest;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserSettingController extends Controller
{
    public function index() {

        $data['object'] = \Auth::user();

        return View('site.profile.setting', $data);
    }

    public function update(UserSettingRequest $request) {

        if ($request->password) {

            $request = $request->except('_token');
            $request['password'] = bcrypt($request['password']);
        }
        else
            $request = $request->except('_token', 'password');

        if (User::find(\Auth::user()->id)->update($request)) {

            return redirect('setting')->withMessage([
                'type' => 'info',
                'message' => trans('common.success_edit')
            ]);
        }
    }

}
