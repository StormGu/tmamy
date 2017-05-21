<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Country;
use App\Models\Profile;
use App\Models\Store;

class StoreController extends Controller
{

    public function index($user_id) {

        $data['breadcrumbs'][trans('titles.stores')] = '#';

        // User Get
        $data['user'] = \Auth::user();
        $data['profile'] = Profile::whereUserId($user_id)->first();

        $data['objects'] = Store::whereUserId($user_id)->latest()->get();

        return view('adforest.store.index', $data);
    }

    public function show($id) {

        $data['breadcrumbs'][trans('titles.stores')] = '#';

        $object = Store::find($id);

        // User Get
        $data['user'] = $object->customer;
        $data['profile'] = $object->customer->profile;

        $data['object'] = $object;
        $data['objects'] = Advertisement::whereStoreId($id)->latest()->get();

        return view('adforest.store.show', $data);
    }

    public function create() {

        $data['breadcrumbs'][__('store.new_store')] = '#';

        $data['categories'] = Category::parents()->pluck('name', 'id');
        $data['countries'] = Country::pluck('name', 'id');

        return view('adforest.store.form', $data);
    }

    public function store(StoreRequest $request) {

        $store = new Store();
        $store->fill($request->except('_token'));
        $store->user_id = \Auth::id();
        $store->status = 'waiting_approval';

        if ($store->save()) {

            if (\Input::hasFile('image')) {
                $this->uploadPic($store->id, \Input::file('image'));
            }

            return redirect('profile/stores')->withMessage([
                'type' => 'success',
                'message' => trans('common.success_added')
            ]);
        }
        else {
            return back()->withMessage([
                'type' => 'warning',
                'message' => trans('common.failed_added')
            ]);
        }
    }

    public function uploadPic($id, $file) {

        $image_path = storage_path('stores' . DIRECTORY_SEPARATOR . $id);

        if (!\File::exists($image_path)) {
            \File::makeDirectory($image_path, 0755, true, true);
        }

        $filename = md5($file) . '.' . $file->getClientOriginalExtension();
        \Image::make($file)->save($image_path . DIRECTORY_SEPARATOR . $filename);
        \DB::table('store')->where('id', $id)->update(['logo_file_name' => $filename]);
    }
}
