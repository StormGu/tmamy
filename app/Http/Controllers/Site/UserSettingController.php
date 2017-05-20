<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\UserSettingRequest;
use App\Models\Coupon;
use App\Models\Profile;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Traits\CaptureIpTrait;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    public function index() {

        $data['breadcrumbs'][trans('auth.settings')] = '#';

        $data['user'] = \Auth::user();
        $data['profile'] = Profile::whereUserId(\Auth::id())->first();

        return View('adforest.profile.settings', $data);
    }

    public function updateProfile(UserSettingRequest $request) {

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
            $currentUser->profile->avatar_status = 1;
            $currentUser->profile->save();

        }

        //
        //        $validator = \Validator::make($request->all(), [
        //            'first_name' => 'required|max:255',
        //            'last_name' => 'required|max:255',
        //            'email' => 'required|email|max:255|unique:users',
        //            // Later
        //        ], [
        //            'first_name.required' => trans('auth.fNameRequired'),
        //            'last_name.required' => trans('auth.lNameRequired'),
        //            'email.required' => trans('auth.emailRequired'),
        //            'email.email' => trans('auth.emailInvalid'),
        //        ]);
        //
        //        if ($validator->fails()) {
        //            $this->throwValidationException($request, $validator);
        //        }

        if (Profile::whereUserId(\Auth::user()->id)->update($request->except('_token', 'avatar', 'avatar_status'))) {
            return redirect('profile/settings')->withMessage([
                'type' => 'success',
                'message' => trans('common.success_edit')
            ]);
        }
    }

    public function updateUser(Request $request) {

        $validator = \Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . \Auth::id()
            // Later
        ], [
            'first_name.required' => trans('auth.fNameRequired'),
            'last_name.required' => trans('auth.lNameRequired'),
            'email.required' => trans('auth.emailRequired'),
            'email.email' => trans('auth.emailInvalid'),
        ]);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        if (User::find(\Auth::user()->id)->update($request->except('_token'))) {
            return redirect('profile/settings')->withMessage([
                'type' => 'success',
                'message' => trans('common.success_edit')
            ]);
        }
    }

    public function password() {
        $data['breadcrumbs'][trans('auth.password')] = '#';

        $data['user'] = \Auth::user();
        $data['profile'] = Profile::whereUserId(\Auth::id())->first();

        return View('adforest.profile.password', $data);
    }

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

    public function social() {

        $data['breadcrumbs'][trans('auth.social')] = '#';

        $data['user'] = \Auth::user();
        $data['profile'] = Profile::whereUserId(\Auth::id())->first();

        return View('adforest.profile.social', $data);
    }

    public function updateSocial(Request $request) {

        $profile = Profile::whereUserId(\Auth::id())->first();
        $profile->fill($request->except('_token'));
        $profile->save();

        $ipAddress = new CaptureIpTrait;
        $user = \Auth::user();
        $user->updated_ip_address = $ipAddress->getClientIp();
        $user->save();

        return redirect('profile/settings/social')->withMessage([
            'type' => 'success',
            'message' => trans('common.success_edit')
        ]);
    }

    public function upgrade() {

        $data['breadcrumbs'][trans('profile.upgrade')] = '#';

        $data['user'] = \Auth::user();
        $data['profile'] = Profile::whereUserId(\Auth::id())->first();

        return View('adforest.profile.upgrade', $data);
    }

    public function updateUpgrade(Request $request) {

        $coupon = Coupon::where('code', $request->get('coupon'))->where('expire_date', '>', date('Y-m-d'))->get();

        if (!$coupon->count()) {
            return back()->withMessage([
                'type' => 'warning',
                'message' => trans('common.wrong_copoun')
            ]);
        }

        $role = Role::find($request->input('roles'));

        $user = User::findOrFail(\Auth::id());

        if (!$user->hasRole($role->id)) {


            $user->attachRole($role->id);

            $updatePoints = Profile::where('user_id', $user->id)->first();
            $updatePoints->points += config('settings.business_points');
            $updatePoints->save();

            return back()->withMessage([
                'type' => 'success',
                'message' => trans('common.success_edit')
            ]);
        }
        else {
            return back()->withMessage([
                'type' => 'warning',
                'message' => trans('common.you_have_this_role')
            ]);
        }
    }
}
