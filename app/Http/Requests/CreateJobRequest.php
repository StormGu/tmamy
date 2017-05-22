<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Backpack\CRUD\app\Http\Requests\CrudRequest;
use Illuminate\Validation\Factory;

class CreateJobRequest extends CrudRequest
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
            'title' => 'required|min:3|max:255',
            'mobile_no' => 'required|min:3|max:255',
            'company_name' => 'required|min:3|max:255',
            'company_address' => 'required|min:3|max:255',
            'company_website' => 'required|min:3|max:255',
            'contact_email' => 'required|email|min:3|max:255',
            // 'employment_status_id' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes() {
        return [];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages() {
        return [];
    }
}
