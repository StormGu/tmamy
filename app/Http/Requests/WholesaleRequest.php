<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

class WholesaleRequest extends FormRequest
{
    public function __construct(Factory $factory) {

        $name = 'points_expired';

        $test = function ($attribute, $value, $parameters, $validator) {
            return ($value >= 0) ? true : false;
        };

        $errorMessage = __('advertisement.points_expired', ['url' => url('profile')]);

        $factory->extend($name, $test, $errorMessage);
    }

    public function authorize() {
        return \Auth::check();
    }

    public function rules() {
        return [
            'after_points' => 'points_expired',
            'title' => 'required',
            'price' => 'required|numeric',
            'mobile_no' => 'required',
            'currency_id' => 'required',
            'image' => 'required',
        ];
    }
}
