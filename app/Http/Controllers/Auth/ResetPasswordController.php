<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('guest');
    }

    public function showResetForm(Request $request, $token = null) {

        $data['breadcrumbs'][trans('auth.resetPassword')] = '#';

        return view('adforest.auth.passwords.reset', $data)->with(['token' => $token, 'email' => $request->email]);
    }
}
