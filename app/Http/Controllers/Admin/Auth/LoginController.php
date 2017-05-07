<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectAfterLogout = 'admin/login';
    protected $redirectTo = '/admin';

    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function logout() {
        $user = \Auth::user();
        \Log::info('User Logged Out. ', [$user]);
        \Auth::logout();
        \Session::flush();
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
}
