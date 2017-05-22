<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
            'title' => 'required',
            'mobile_no' => 'required',
            'lat' => 'required',
            'lon' => 'required',
        ];
    }

    public function messages(){
        return [
            'lat.required' => __('advertisement.lat_required'),
            'lon.required' => __('advertisement.lon_required'),
        ];
    }
}
