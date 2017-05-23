<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Backpack\CRUD\app\Http\Requests\CrudRequest;
use Illuminate\Validation\Factory;

class CreateDoctorRequest extends CrudRequest
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
            'title' => 'required|min:5|max:255',
            'practice_name' => 'required|min:5|max:255',
            'email' => 'required|email|min:5|max:255',
            'mobile_no' => 'required|min:5|max:255',
            'details' => 'required|min:5|max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes() {
        return [
            'title' => __('advertisement.doctor_name')
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages() {
        return [//
        ];
    }
}
