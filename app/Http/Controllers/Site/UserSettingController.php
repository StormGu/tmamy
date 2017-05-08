<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\UserSettingRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Traits\CaptureIpTrait;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    public function index() {

        $data['breadcrumbs'][trans('auth.settings')] = '#';

        $data['object'] = \Auth::user();

        return View('adforest.profile.settings', $data);
    }

    public function update(UserSettingRequest $request) {

        if (\Input::hasFile('avatar')) {
            $currentUser = \Auth::user();
            $avatar = \Input::file('avatar');
            $filename = 'avatar.' . $avatar->getClientOriginalExtension();
            $save_path = storage_path() . '/users/id/' . $currentUser->id . '/uploads/images/avatar/';
            $public_path = '/images/profile/' . $currentUser->id . '/avatar/' . $filename;

            // Make the user a folder and set permissions
            \File::makeDirectory($save_path, $mode = 0755, true, true);

            // Save the file to the server
            \Image::make($avatar)->resize(300, 300)->save($save_path . $filename);

            // Save the public image path
            $currentUser->profile->avatar = $public_path;
            $currentUser->profile->save();

        }

        if ($request->password) {

            $request = $request->except('_token');
            $request['password'] = bcrypt($request['password']);
        }
        else
            $request = $request->except('_token', 'password');

        if (User::find(\Auth::user()->id)->update($request)) {

            return redirect('profile/settings')->withMessage([
                'type' => 'success',
                'message' => trans('common.success_edit')
            ]);
        }
    }

    public function password(){
        $data['breadcrumbs'][trans('auth.password')] = '#';

        $data['object'] = \Auth::user();

        return View('adforest.profile.password', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request|\Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateUserPassword(Request $request) {

        $user = User::findOrFail(\Auth::id());
        $ipAddress = new CaptureIpTrait;

        $validator = \Validator::make($request->all(), [
            'password' => 'required|min:6|max:20|confirmed',
            'password_confirmation' => 'required|same:password',
        ], [
            'password.required' => trans('auth.passwordRequired'),
            'password.min' => trans('auth.PasswordMin'),
            'password.max' => trans('auth.PasswordMax'),
        ]);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        if ($request->input('password') != null) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->updated_ip_address = $ipAddress->getClientIp();

        $user->save();

        return redirect('profile/settings/password')->withMessage([
            'type' => 'success',
            'message' => trans('common.success_edit')
        ]);
    }


    public function social(){
        $data['breadcrumbs'][trans('auth.social')] = '#';

        $data['object'] = \Auth::user();

        return View('adforest.profile.social', $data);
    }

    public function updateSocial(Request $request) {

        $user = User::findOrFail(\Auth::id());
        $ipAddress = new CaptureIpTrait;

        $validator = \Validator::make($request->all(), [
            'facebook' => '',
        ]);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $user->updated_ip_address = $ipAddress->getClientIp();

        $user->save();

        return redirect('profile/settings/social')->withMessage([
            'type' => 'success',
            'message' => trans('common.success_edit')
        ]);
    }


    public function upgrade(){
        $data['breadcrumbs'][trans('profile.upgrade')] = '#';

        $data['object'] = \Auth::user();

        return View('adforest.profile.upgrade', $data);
    }

    public function updateUpgrade(Request $request){

        $role = Role::find($request->input('roles'));

        $user = User::findOrFail(\Auth::id());
        if (!$user->hasRole($role->name) && $user->assignRole($role->name)) {

            return back()->withMessage([
                'type' => 'success',
                'message' => trans('common.success_edit')
            ]);
        } else {
            return back()->withMessage([
                'type' => 'warning',
                'message' => trans('common.you_have_this_role')
            ]);
        }
    }
}
