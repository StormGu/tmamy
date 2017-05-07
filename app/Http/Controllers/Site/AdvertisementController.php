<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\AdvertisementInfoCareersJob;
use App\Models\AdvertisementInfoCareersJobRequirement;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
class AdvertisementController extends Controller
{

    public function __construct() {
    }

    public function index($categoryId) {
    }

    public function get($id) {


        $object = Advertisement::whereId($id)->whereStatus('approved')->first();

        $data['breadcrumbs'][$object->title] = '#';

        if (!$object) {
            return redirect('home');
        }

        $data['object'] = $object;
        $data['adv_type'] = '';

        switch ($data['adv_type']) {
            case 'career_job':
                // Career Job Case
                $data['object_career'] = AdvertisementInfoCareersJob::whereAdvertisementId($id)->first();
                $data['object_requirements'] = AdvertisementInfoCareersJobRequirement::whereAdvertisementId($id)->get();
                // $data['object_requirements'] = AdvertisementInfoCareersJobRequirement::whereAdvertisementId($id)->first();


                break;

            default:

        }

        $data['features'] = $object->features()->get();


        return View('adforest.advertisement.show', $data);
    }
    public function PostAdvertisement(){

        $cat =  Category::where('parent_id', null)->get();

        $cou =  Country::All();

        return view('adforest.advertisement.PostAdvertisement', compact('cat','cou'));
    }

    public function postAdv(Request $request){
        $adv = new Advertisement;

        $Input=$request->all();

        $adv->category_id=$Input['category_id'];

        $filelogo = $request->file('image_filename');
        $logoName = time().'.'.$filelogo->getClientOriginalName();
        $request->file('image_filename')->move("uploads/",$logoName);




        $adv->advertisementno = 1555;
        $adv->title=$Input['title'];
        $adv->category_id=$Input['category_id'];
        $adv->country_id=$Input['country_id'];
        $adv->title=$Input['title'];
        $adv->details=$Input['details'];
        $adv->mobile_no=$Input['mobile_no'];
        $adv->phone_no=$Input['phone_no'];
        $adv->advertisment_date=$Input['advertisment_date'];
        $adv->expiry_date=$Input['expiry_date'];
        $adv->advertisment_type_id=$Input['minimalradio'];
        $adv->price=$Input['price'];
        $adv->image_filename='uploads/'. $logoName;





      $adv->save();

        return redirect('/');
    }
    public function newAdvertisements($categoryId) {
    }

    public function powerAdvertisements($categoryId) {
    }

    public function hotAdvertisements($categoryId) {
    }

    public function filterAdvertisements($categoryId) {
    }

}
