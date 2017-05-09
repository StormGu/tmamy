<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\AdvertisementInfoCareersJob;
use App\Models\AdvertisementInfoCareersJobRequirement;
use App\Models\AdvertisementInfoCareersResume;
use App\Models\AdvertisementInfoCareersResumeEducation;
use App\Models\AdvertisementInfoCareersResumeExperience;
use App\Models\AdvertisementInfoExhibition;
use App\Models\AdvertisementInfoHealth;
use App\Models\AdvertisementInfoHealthDoctorClinic;
use App\Models\AdvertisementInfoHealthDoctorClinicSchedule;
use App\Models\AdvertisementInfoHealthDoctorEducation;
use App\Models\AdvertisementInfoHealthDoctorMembership;
use App\Models\AdvertisementInfoHealthHospitalSchedule;
use App\Models\AdvertisementInfoHealthHospitalSpecialty;
use App\Models\AdvertisementInfoService;
use App\Models\AdvertisementInfoServicesCost;
use App\Models\AdvertisementInfoTender;
use App\Models\AdvertisementInfoWholesaler;
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


        $object = Advertisement::whereId($id)->whereStatus('approved')->first();

        $data['breadcrumbs'][$object->title] = '#';

        if (!$object) {
            return redirect('home');
        }

        $data['object'] = $object;
        $data['features'] = $object->features()->get();

        switch ($object->category_id) {
            case 73:

                return $this->infoCareerJob($id, $data);
                break;

            case 74:

                return $this->infoCareerResume($id, $data);
                break;

            case 10:

                return $this->infoExhibition($id, $data);
                break;

            case 32:

                return $this->infoHealthDoctorClinic($id, $data);
                break;

            case 36:

                return $this->infoHealthHospital($id, $data);
                break;

            case 8:

                return $this->infoService($id, $data);
                break;

            case 11:

                return $this->infoTender($id, $data);
                break;

            case 9:

                return $this->infoWholesaler($id, $data);
                break;

            default:

                $data['advs'] = Advertisement::where('id', $id)->get();

                return View('adforest.advertisement.show', $data);
        }


        return View('adforest.advertisement.show', $data);
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


        if ($user->Points == 0) {
            echo "error";
        }
        else {
            $flight = User::find($Input['user_id']);
            $flight->Points = $flight->Points - 300;

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

    public function infoCareerResume($id, $data) {

        $data['resume'] = AdvertisementInfoCareersResume::whereAdvertisementId($id)->first();
        $data['experiences'] = AdvertisementInfoCareersResumeExperience::whereAdvertisementId($id)->get();
        $data['educations'] = AdvertisementInfoCareersResumeEducation::whereAdvertisementId($id)->get();

        return View('adforest.advertisement.info.infoCareerResume', $data);

    }

    public function infoExhibition($id, $data) {

        $data['exhibition'] = AdvertisementInfoExhibition::whereAdvertisementId($id)->first();

        return View('adforest.advertisement.info.infoExhibition', $data);
    }

    public function infoHealthDoctorClinic($id, $data) {

        $data['health'] = AdvertisementInfoHealth::whereAdvertisementId($id)->first();
        $data['educations'] = AdvertisementInfoHealthDoctorEducation::whereAdvertisementId($id)->get();
        $data['memberships'] = AdvertisementInfoHealthDoctorMembership::whereAdvertisementId($id)->get();
        $data['clinics'] = AdvertisementInfoHealthDoctorClinic::whereAdvertisementId($id)->get();

        return View('adforest.advertisement.info.infoHealthDoctorClinic', $data);
    }

    public function infoHealthHospital($id, $data) {

        $data['health'] = AdvertisementInfoHealth::whereAdvertisementId($id)->first();
        $data['schedules'] = AdvertisementInfoHealthHospitalSchedule::whereAdvertisementId($id)->get();
        $data['specialties'] = AdvertisementInfoHealthHospitalSpecialty::whereAdvertisementId($id)->get();

        return View('adforest.advertisement.info.infoHealthHospital', $data);
    }

    public function infoOffer() {
        return View('adforest.advertisement.info.infoOffer');
    }

    public function infoService($id, $data) {

        $data['service'] = AdvertisementInfoService::whereAdvertisementId($id)->first();
        $data['costs'] = AdvertisementInfoServicesCost::whereAdvertisementId($id)->get();

        return View('adforest.advertisement.info.infoService', $data);
    }

    public function infoRestaurant() {
        return View('adforest.advertisement.info.infoRestaurant');
    }

    public function infoTender($id, $data) {
        $data['tender'] = AdvertisementInfoTender::whereAdvertisementId($id)->first();

        return View('adforest.advertisement.info.infoTender', $data);
    }

    public function infoWholesaler($id, $data) {

        $data['wholesaler'] = AdvertisementInfoWholesaler::whereAdvertisementId($id)->first();

        return View('adforest.advertisement.info.infoWholesaler', $data);
    }

}
