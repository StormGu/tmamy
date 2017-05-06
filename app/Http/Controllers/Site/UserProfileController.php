<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{

    public function show($id = null) {

        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

        return View('adforest.profile.index', $data);
    }

    public function update() {
    }

    public function advertisements($type = null) {

        $data['breadcrumbs'][trans('titles.myAds')] = '#';

        // User Get
        $data['object'] = User::with('profile')->find(\Auth::id());

        $objects = Advertisement::query();

        if ($type != null) {
            $objects->whereStatus($type);
        }

        $data['objects'] =  $objects->whereUserId(\Auth::id())->get();

        return View('adforest.profile.my_ads', $data);
    }

    public function stores($type = null) {

        $data['breadcrumbs'][trans('titles.myStores')] = '#';

        // User Get
        $data['object'] = User::with('profile')->find(\Auth::id());

        $objects = Store::query();

        if ($type != null) {
            $objects->whereStatus($type);
        }

        $data['objects'] =  $objects->whereUserId(\Auth::id())->get();

        return View('adforest.profile.my_stores', $data);

    }

    public function notifications() {
    }

    public function financials() {

        // Cash
        // Points
    }

    public function promotions() {
    }

    public function messages() {

        // Inbox
        // OutBox
    }

    public function powerAdvs() {
    }

    public function upgrade() {
    }

}
