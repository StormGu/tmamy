<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index() {
        $data = [];

        $data['objects'] = Category::parents()->whereHas('advertisements')->with([
            'advertisements' => function ($query) {
                $query->approved();
            }
        ])->get();

        return View('adforest.home.index', $data);
    }

    public function hotSellingAds() {

    }

    public function hotDealsAds() {

    }

}
