<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\AdvertisementInfoCareersJob;
use App\Models\AdvertisementInfoCareersJobRequirement;
use App\Models\Country;
use App\Models\User;
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


      //  $object = Advertisement::whereId($id)->whereStatus('approved')->first();

       // $data['breadcrumbs'][$object->title] = '#';

      //  if (!$object) {
        //    return redirect('home');
      //  }

      //  $data['object'] = $object;

      //  switch ($object->category_id) {
       //     case 73:

         //       return $this->infoCareerJob($id, $data);
          //      break;
         //   default:

          //      $data['features'] = $object->features()->get();
           //     return View('adforest.advertisement.show', $data);
    //    }

        $advs = Advertisement::where('id', $id)->get();

        return View('adforest.advertisement.show', compact('advs'));
    }

    public function PostAdvertisement() {

        $cat = Category::where('parent_id', null)->get();

        $cou = Country::All();

        return view('adforest.advertisement.PostAdvertisement', compact('cat', 'cou'));
    }

    public function postAdv(Request $request) {

        $adv = new Advertisement;

        $Input = $request->all();

        $adv->category_id = $Input['category_id'];

        $filelogo = $request->file('image_filename');
        $logoName = time() . '.' . $filelogo->getClientOriginalName();
        $request->file('image_filename')->move("uploads/", $logoName);

        $adv->advertisementno = 1555;
        $adv->title = $Input['title'];
        $adv->user_id = $Input['user_id'];
        $adv->category_id = $Input['category_id'];
        $adv->country_id = $Input['country_id'];
        $adv->title = $Input['title'];
        $adv->details = $Input['details'];
        $adv->mobile_no = $Input['mobile_no'];
        $adv->phone_no = $Input['phone_no'];
        $adv->advertisment_date = $Input['advertisment_date'];
        $adv->expiry_date = $Input['expiry_date'];
        $adv->advertisment_type_id = $Input['minimalradio'];
        $adv->price = $Input['price'];
        $adv->image_filename = 'uploads/' . $logoName;

        $user = User::find($Input['user_id']);





        if ($user->Points == 0){
            echo "error";
        }else{
            $flight = User::find($Input['user_id']);
            $flight->Points =  $flight->Points - 300;

            $flight->save();

            $adv->save();
        }

        
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

    public function infoCareerJob($id, $data) {

        $data['object_career'] = AdvertisementInfoCareersJob::whereAdvertisementId($id)->first();
        $data['object_requirements'] = AdvertisementInfoCareersJobRequirement::whereAdvertisementId($id)->get();
        // $data['object_requirements'] = AdvertisementInfoCareersJobRequirement::whereAdvertisementId($id)->first();

        return View('adforest.advertisement.info.infoCareerJob', $data);
    }

    public function infoCareerResume() {

        return View('adforest.advertisement.info.infoCareerResume');
    }

    public function infoExhibition() {

        return View('adforest.advertisement.info.infoExhibition');
    }

    public function infoHealth() {

        return View('adforest.advertisement.info.infoHealth');
    }

    public function infoHealthDoctorClinic() {
        return View('adforest.advertisement.info.infoHealthDoctorClinic');
    }

    public function infoHealthHospital() {
        return View('adforest.advertisement.info.infoHealthHospital');
    }

    public function infoOffer() {
        return View('adforest.advertisement.info.infoOffer');
    }

    public function infoService() {
        return View('adforest.advertisement.info.infoService');
    }

    public function infoRestaurant() {
        return View('adforest.advertisement.info.infoRestaurant');
    }

    public function infoTender() {
        return View('adforest.advertisement.info.infoTender');
    }

    public function infoWholesaler() {
        return View('adforest.advertisement.info.infoWholesaler');
    }

}
