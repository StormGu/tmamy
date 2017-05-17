<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
{

    public function authorize() {
        return \Auth::check();
    }

    public function rules() {
        return [
            'title' => 'required',
            'mobile_no' => 'required',
        ];
    }
}
