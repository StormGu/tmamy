<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests;
use File;
use App\Http\Controllers\Controller;

class AdminDetailsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listRoutes()
    {
		$routes = Route::getRoutes();
		$data = [
			'routes' => $routes
		];

       return view('admin.routes.route-details', $data);
    }

    public function listPHPInfo()
    {
        return view('pages.admin.php-details');
    }

}