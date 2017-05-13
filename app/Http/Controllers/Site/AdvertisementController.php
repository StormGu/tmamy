<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\AdvertisementRequest;
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
use App\Models\FeatureList;
use App\Models\Profile;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class AdvertisementController extends Controller
{

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

    // Ismail Advertisement Add Form
    public function AddAdvertisementStep1() {

        $data['breadcrumbs'][__('advertisement.heading_title')] = '#';

        return View('adforest.advertisement.form.step1', $data);
    }

    public function AddAdvertisementStep2($category_id) {

        $data['parentCategory'] = Category::find($category_id);
        $data['categories'] = Category::whereParentId($category_id)->get();

        return View('adforest.advertisement.form.step2', $data);
    }

    public function AddAdvertisementStep3($category_id, $subcategory_id = null) {


        $data['breadcrumbs'][__('advertisement.heading_title')] = '#';

        $data['category_id'] = $category_id;
        $data['subcategory_id'] = $subcategory_id;

        $data['properties'] = Property::whereCategoryId($category_id)->get();
        $data['features'] = Category::find($category_id)->features()->get();

        $health_doctor_categories = explode(',', config('settings.health_doctor_categories'));

        if (in_array($subcategory_id, $health_doctor_categories)) {
            $data['additional_info'] = View('adforest.advertisement.form.infoHealthDoctor');
        }
        else {
            $data['additional_info'] = '';
        }

        $data['current_points'] = \Auth::user()->profile->points;
        $data['after_points'] = \Auth::user()->profile->points - 300;

        return View('adforest.advertisement.form.step3', $data);
    }

    public function CreateAdvertisement(AdvertisementRequest $request) {

        $advertisement = new Advertisement();
        $advertisement->fill($request->except('_token', 'points'));
        $advertisement->user_id = \Auth::id();
        $advertisement->status = 'waiting_approval';

        if (\Input::hasFile('image')) {
            $currentUser = \Auth::user();
            $image = \Input::file('image');
            $filename = md5($image) . '.' . $image->getClientOriginalExtension();
            //$save_path = storage_path() . '/users/id/' . $currentUser->id . '/uploads/advertisements/';
            $save_path = 'uploads';

            // Make the user a folder and set permissions
            \File::makeDirectory($save_path, $mode = 0755, true, true);

            // Save the file to the server
            \Image::make($image)->save($save_path . DIRECTORY_SEPARATOR . $filename);

            $advertisement->image_filename = $save_path . DIRECTORY_SEPARATOR . $filename;
        }


        if ($advertisement->save()) {

            $profile = Profile::whereUserId(\Auth::id())->first();
            $profile->points = $request->input('after_points');
            $profile->save();

            if ($request->input('properties'))
                foreach ($request->input('properties') as $key => $value) {
                    $property = Property::where('key', '=', $key)
                        ->whereCategoryId($request->input('category_id'))
                        ->first();
                    $property->advertisements()->attach($advertisement->id, ['property_value' => $value]);
                }

            if ($request->input('features'))
                foreach ($request->input('features') as $key => $value) {

                    $feature = FeatureList::find($value);
                    $feature->advertisements()->attach($advertisement->id);
                }

            return redirect('profile/ads')->withMessage([
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

}
