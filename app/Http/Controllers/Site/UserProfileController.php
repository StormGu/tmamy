<?php

namespace App\Http\Controllers\Site;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller {

    public function show($id = null){

        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

        return View('adforest.profile.index', $data);
    }

    public function update(){}

    public function advertisements($type_id = null){

        $data = [];
        return View('adforest.profile.ads', $data);
    }

    public function stores($id = null){

        $data['breadcrumbs'][trans('titles.stores')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);
        $data['stores'] = Store::with('user')->whereUserId($id);

        return View('adforest.profile.stores', $data);
    }

    public function notifications(){}

    public function financials(){

        // Cash
        // Points
    }

    public function promotions(){}

    public function messages(){

        // Inbox
        // OutBox
    }

    public function powerAdvs(){}

    public function upgrade(){}

}
