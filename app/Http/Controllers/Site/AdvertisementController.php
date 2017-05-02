<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\AdvertisementInfoCareersJob;
use App\Models\AdvertisementInfoCareersJobRequirement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{

    public function __construct() {
    }

    public function index($categoryId) {
    }

    public function get($id) {

        $object = Advertisement::whereId($id)->whereStatus('approved')->first();

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


        return View('site.advertisement.show', $data);
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
