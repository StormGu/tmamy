<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller {
 
    public function __construct(){}   

    public function index() {

        return View('site.profile.index');
    }

    public function update(){}

    public function advetisments(){}

    public function stores(){}

    public function notifications(){}

    public function financials(){

        // Cash
        // Points
    }

    public function promotions(){}

    public function messages(){

        // Inbox
        // OutBox
    }

    public function powerAdvs(){}

    public function upgrade(){}

}
