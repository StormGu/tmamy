<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller {
    
    public function __construct(){}

    public function index($categoryId){}

    public function get($id){

        return View('site.advertisement.show');
    }
    
    public function newAdvertisements($categoryId){}

    public function powerAdvertisements($categoryId){}

    public function hotAdvertisements($categoryId){}

    public function filterAdvertisements($categoryId){}

}
