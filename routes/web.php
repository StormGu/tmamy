<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route

Route::group(['namespace' => 'Site'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@store');
    Route::get('PostAdvertisement', 'AdvertisementController@PostAdvertisement');
    Route::post('PostAdv', 'AdvertisementController@PostAdv');
    Route::get('category/{category_id}', 'CategoryController@index');
    Route::get('search', 'SearchController@index');
    Route::post('search', 'SearchController@index');
    Route::get('page/{page}/{subs?}', ['uses' => 'PageController@index'])->where([
        'page' => '^((?!admin).)*$',
        'subs' => '.*'
    ]);

    Route::get('adv/{id}', 'AdvertisementController@get');
    Route::get('advertisement/{id}', 'AdvertisementController@get');
    Route::post('comment', 'AdvertisementController@comment');
});

// Homepage Route
Route::group([
    'namespace' => 'Site',
    'middleware' => ['auth', 'activated', 'adpoints']
], function () {

    // Ismail Add Adv Routes
    Route::get('AddAdv', 'AdvertisementController@AddAdvertisementStep1');
    Route::get('AddAdv/billing', 'AdvertisementController@AddAdvertisementBilling');
    Route::get('AddAdv/{main_category_id}/{category_id}', 'AdvertisementController@AddAdvertisementStep3');

    // Route::get('AddAdv/{category_id}/{subcategory_id}', 'AdvertisementController@AddAdvertisementStep3');
    Route::post('CreateAdv', 'AdvertisementController@CreateAdvertisement');
    Route::post('CreateService', 'AdvertisementController@CreateService');
    Route::post('CreateRestaurant', 'AdvertisementController@CreateRestaurant');
    Route::post('CreateWholesale', 'AdvertisementController@CreateWholesale');
    Route::post('CreateCareerJob', 'AdvertisementController@CreateCareerJob');
    Route::post('CreateHealthDoctor', 'AdvertisementController@CreateHealthDoctor');
    Route::post('CreateExhibition', 'AdvertisementController@CreateExhibition');

    /** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
    //    Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    //        ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);

    Route::get('getSubCategories/{main_category_id}/{category_id}', 'AdvertisementController@getSubCategories');
    Route::get('checkCoupon', 'AdvertisementController@checkCoupon');

});

// Authentication Routes
Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin\Auth'], function () {
    Route::get('login', ['as' => 'admin_login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'LoginController@login']);
});

// Admin Panel: Registered, Activated, and is admin role.
Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'activated', 'role:Admin']
], function () {
    // Dashboard
    Route::get('/', ['uses' => 'HomeController@index']);
    Route::get('home', ['uses' => 'HomeController@index']);
    Route::get('dashboard', ['uses' => 'HomeController@index']);

    Route::resource('advertisements', 'AdvertisementCrudController');
    CRUD::resource('categories', 'CategoryCrudController');
    CRUD::resource('stores', 'StoreCrudController');
    CRUD::resource('users', 'UserCrudController');
    CRUD::resource('constants', 'ConstantCrudController');
    CRUD::resource('features', 'FeatureCrudController');
    CRUD::resource('slider', 'SliderCrudController');
    CRUD::resource('property', 'PropertyCrudController');
    CRUD::resource('listofvalues', 'ListOfValueCrudController');
    Route::group(['prefix' => 'listofvalues/{parent_id}'], function () {
        CRUD::resource('listofvaluesdetails', 'ListOfValueDetailCrudController');
    });

    CRUD::resource('coupons', 'CouponCrudController');
    CRUD::resource('settings', '\Backpack\Settings\app\Http\Controllers\SettingCrudController');

    CRUD::resource('constantkey', 'ConstantKeyCrudController');

    Route::get('routes', 'AdminDetailsController@listRoutes');

    CRUD::resource('country', 'CountryCrudController');
    CRUD::resource('zone', 'ZoneCrudController');
    CRUD::resource('language', 'LanguageCrudController');
});

// Registered, activated, and is admin routes.
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => ['auth', 'activated', 'role:admin']
], function () {
    //
    //    Route::resource('/users/deleted', 'SoftDeletesController', [
    //        'only' => [
    //            'index',
    //            'show',
    //            'update',
    //            'destroy',
    //        ]
    //    ]);
    //

});


// Public Routes
Route::group(['middleware' => 'web'], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', [
        'as' => 'social.redirect',
        'uses' => 'Auth\SocialController@getSocialRedirect'
    ]);
    Route::get('/social/handle/{provider}', [
        'as' => 'social.handle',
        'uses' => 'Auth\SocialController@getSocialHandle'
    ]);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])
        ->name('activation-required');

    Route::get('logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');

    //  Homepage Route - Redirect based on user role is in controller.
    // Route::get('/profile', ['as' => 'public.home', 'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    //    Route::get('profile/{id}', [
    //        'as' => '{id}',
    //        'uses' => 'ProfilesController@show'
    //    ]);

});


// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'adpoints']], function () {

    // User Profile and Account Routes
    //    Route::resource('profile', 'ProfilesController', [
    //            'only' => [
    //                'show',
    //                'edit',
    //                'update',
    //                'create'
    //            ]
    //        ]);
    //    Route::put('profile/{username}/updateUserAccount', [
    //        'as' => '{username}',
    //        'uses' => 'ProfilesController@updateUserAccount'
    //    ]);
    //    Route::put('profile/{username}/updateUserPassword', [
    //        'as' => '{username}',
    //        'uses' => 'ProfilesController@updateUserPassword'
    //    ]);
    //    Route::delete('profile/{username}/deleteUserAccount', [
    //        'as' => '{username}',
    //        'uses' => 'ProfilesController@deleteUserAccount'
    //    ]);


    Route::get('profile/ads/{type?}', 'Site\UserProfileController@advertisements');
    Route::get('profile/{id}/ads/{type?}', 'Site\UserProfileController@followeradvertisements');
    Route::get('profile/stores/{type?}', 'Site\UserProfileController@stores');
    Route::get('profile/{id}/stores/{type?}', 'Site\UserProfileController@followerstores');
    Route::post('profile/follower', 'Site\UserProfileController@follower');
    Route::post('profile/unfollower', 'Site\UserProfileController@unfollow');
    Route::post('profile/SubscribeStore', 'Site\UserProfileController@SubscribeStore');
    Route::post('profile/disSubscribeStore', 'Site\UserProfileController@disSubscribeStore');
    Route::post('profile/likeStore', 'Site\UserProfileController@likeStore');
    Route::post('profile/dislikeStore', 'Site\UserProfileController@disLikeStore');
    Route::get('profile/{id}', 'Site\UserProfileController@show')->where('id', '[0-9]+');


    Route::get('profile/adDelet/{id}', 'Site\UserProfileController@deletads');
    Route::get('Message', 'Site\UserProfileController@msg');

    Route::get('profile/settings', 'Site\UserSettingController@index');
    Route::post('profile/settings', 'Site\UserSettingController@updateProfile');
    Route::post('profile/settings/updateUser', 'Site\UserSettingController@updateUser');

    Route::post('profile/Message', 'Site\MessageController@postmsg');
    Route::get('profile/Message/getformmsg/{id}', 'Site\MessageController@getformmsg');
    Route::get('profile/getfollower/{id}', 'Site\UserProfileController@getfollower');
    Route::get('profile/settings/password', 'Site\UserSettingController@password');
    Route::post('profile/settings/password', 'Site\UserSettingController@updateUserPassword');
    Route::get('profile/inbox', 'Site\MessageController@inbox');

    Route::get('profile/settings/social', 'Site\UserSettingController@social');
    Route::post('profile/settings/social', 'Site\UserSettingController@updateSocial');

    Route::get('profile/upgrade', 'Site\UserSettingController@upgrade');
    Route::post('profile/upgrade', 'Site\UserSettingController@updateUpgrade');

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);

    // Store Routes
    // Route::get('stores/{user_id}', 'Site\StoreController@index');
    Route::get('store/create', 'Site\StoreController@create');
    Route::get('store/{id}', 'Site\StoreController@show');
    Route::get('store/{id}/edit', 'Site\StoreController@edit');
    Route::post('store', 'Site\StoreController@store');
    Route::post('store/{id}', 'Site\StoreController@update');

    Route::get('advertisement/{id}/{status}', 'Site\AdvertisementController@changeStatus');
});


Route::group(['middleware' => ['auth', 'activated']], function () {
    //Site\UserProfileController@show
    //Route::get('/profile', ['as' => 'public.home', 'uses' => 'Site\UserProfileController@show']);
    Route::get('/profile', ['as' => 'public.home', 'uses' => 'Site\UserProfileController@advertisements']);

    Route::get('admin/logout', ['uses' => 'Admin\Auth\LoginController@logout'])->name('logout');
});

// Resize Image

Route::get('image/{size}/{folder}/{id}/{name}', function ($size = null, $folder = 'advertisement', $id = null, $name = null) {

    if (!is_null($size) && !is_null($name)) {

        if (strstr($size, '&times;'))
            $size = explode('&times;', $size);
        else
            $size = explode('×', $size);

        $cache_image = Image::cache(function ($image) use ($size, $id, $name, $folder) {
            // dd(storage_path() . '/' . $folder . '/' . $id . '/' . $name);
            return $image->make(storage_path($folder . '/' . $id . '/' . $name))->fit($size[0], $size[1]);

            // return $image->make(url('/' . $name))->fit($size[0], $size[1]);
        }, 10);
        return Response::make($cache_image, 200, ['Content-Type' => 'image']);
    }
    else {
        abort(404);
    }
})->where('name', '([A-z\d-\/_.]+)?')->where('id', '[0-9]+');

Route::get('image/{size}/{name}', function ($size = null, $name = null) {

    if (!is_null($size) && !is_null($name)) {

        if (strstr($size, '&times;'))
            $size = explode('&times;', $size);
        else
            $size = explode('×', $size);

        $cache_image = Image::cache(function ($image) use ($size, $name) {
            return $image->make(public_path($name))->fit($size[0], $size[1]);
        }, 10);
        return Response::make($cache_image, 200, ['Content-Type' => 'image']);
    }
    else {
        abort(404);
    }
})->where('name', '([A-z\d-\/_.]+)?');

// Change Locale Route
Route::get('lang/{lang}', function ($lang) {

    // Get Available Languages
    $available_locales = array_column(json_decode(json_encode(\DB::table('languages')
        ->select('code')
        ->where('status', '1')
        ->orderBy('sort_order', 'asc')
        ->get()), true), 'code');

    if (in_array($lang, $available_locales)) {
        \Session::put('locale', $lang);
    }
    else {
        \Session::put('locale', \Config::get('locale'));
    }

    return Redirect::back();
});

// Route to show user avatar
Route::get('images/profile/{id}/avatar/{image}', [
    'uses' => 'ProfilesController@userProfileAvatar'
]);


Route::get('/ibra', function () {

});