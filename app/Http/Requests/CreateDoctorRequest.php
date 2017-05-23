<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Backpack\CRUD\app\Http\Requests\CrudRequest;

class CreateDoctorRequest extends CrudRequest
{

    public function authorize() {
        return \Auth::check();
    }


    public function rules() {
        return [
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
