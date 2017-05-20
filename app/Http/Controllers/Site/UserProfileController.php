<?php

namespace App\Http\Controllers\Site;

use DB;
use App\Models\Advertisement;
use App\Models\Store;
use App\Models\StoreLike;
use App\Models\User;
use App\Models\StoreSubscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Models\UserFollower;
use App\Models\Profile;

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

        $data['objects'] = $objects->whereUserId(\Auth::id())->orderBy('id', 'desc')->get();

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

        $data['objects'] = $objects->whereUserId(\Auth::id())->get();

        return View('adforest.profile.my_stores', $data, compact('countuserfollower'));

    }

    public function poststores() {
        $cat = Category::where('parent_id', null)->get();

        $cou = Country::All();

        return view('adforest.profile.PostStores', compact('cat', 'cou'));
    }

    public function Postnewstores(Request $request) {
        $stors = new Store;

        $Input = $request->all();

        $stors->category_id = $Input['category_id'];

        $filelogo = $request->file('logo_file_name');
        $logoName = time() . '.' . $filelogo->getClientOriginalName();
        $request->file('logo_file_name')->move("uploads/", $logoName);


        $stors->title = $Input['title'];
        $stors->company_name = $Input['company_name'];
        $stors->category_id = $Input['category_id'];
        $stors->country_id = $Input['country_id'];
        $stors->user_id = $Input['user_id'];
        $stors->description = $Input['description'];
        $stors->mobile_no = $Input['mobile_no'];
        $stors->phone_no = $Input['phone_no'];
        $stors->start_date = $Input['start_date'];
        $stors->expiry_date = $Input['expiry_date'];
        $stors->address = $Input['address'];
        $stors->email = $Input['email'];
        $stors->url = $Input['url'];
        $stors->pob = $Input['pob'];
        $stors->fax = $Input['fax'];
        $stors->store_account_type_id = $Input['store_account_type_id'];

        $stors->logo_file_name = 'uploads/' . $logoName;
        $stors->status = 'waiting_approval';
        $stors->main_category =  1;
        $stors->name = "ibrss";
        $stors->background_file_name = 'uploads/' . $logoName;
        $stors->cr_no = 15;
        $stors->background_color = "sdfsdf";
        $stors->facebook = "facebook";
        $stors->twitter = "twitter";
        $stors->google_plus = "google_plus";
        $stors->linkedin = "linkedin";
        $stors->pinterest = "pinterest";






            $stors->save();


        return redirect()->back();
    }

    public function deletads($id) {


        $Advertisemen = Advertisement::find($id);

        $Advertisemen->delete();

        return redirect()->back();
    }

    public function showstores($id) {

        $Adve = Advertisement::where('store_id', $id)->get();
        $countuserfollower = UserFollower::where('user_id', $id)->count();
        $store_id = $id;
        return view('adforest.profile.showdst', compact('Adve', 'countuserfollower', 'store_id'));
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

    public function follower(Request $request) {


        $userfollowers = new UserFollower();
        $Input = $request->all();

        $userfollowers->user_id = $Input['user_id'];
        $userfollowers->user_followers_id = $Input['user_followers_id'];
        $userfollowers->user_followers_name = $Input['user_followers_name'];

        $userfollowers->save();

        return redirect()->back();
    }

    public function unfollow(Request $request) {
        $Input = $request->all();

        DB::table('user_followers')->where('user_followers_id', $Input['user_followers_id'])->delete();

        return redirect()->back();
    }

    public function showprofile($id) {
        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

       

        $user_id = \Auth::id();

        return view('adforest.profile.showprofile', $data, compact('user_id'));
    }

    public function SubscribeStore(Request $request) {
        $store_subscription = new StoreSubscription();
        $Input = $request->all();

        $store_subscription->user_id = $Input['user_id'];
        $store_subscription->store_id = $Input['store_id'];


        $store_subscription->save();

        return redirect()->back();
    }

    public function disSubscribeStore(Request $request) {
        $Input = $request->all();


        DB::table('store_subscription')->where('user_id', $Input['user_id'])->delete();

        return redirect()->back();
    }

    public function likeStore(Request $request) {
        $likeStore = new StoreLike();
        $Input = $request->all();

        $likeStore->user_id = $Input['user_id'];
        $likeStore->store_id = $Input['store_id'];


        $likeStore->save();

        return redirect()->back();
    }

    public function disLikeStore(Request $request) {
        $Input = $request->all();

        DB::table('store_like')->where('user_id', $Input['user_id'])->delete();

        return redirect()->back();
    }

    public function msg() {
        return view('adforest.profile.Message');
    }

    public function getfollower($id){
        
        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

       

        
        return view('adforest.profile.followers',$data);
    }

}
