<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    
    public function __construct(){}

    public function index(){

        return View('adforest.home.index');
    }

    public function storesHotSelling(){}

}
