<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CouponRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|min:5|max:255',
            'code' => 'unique:coupons'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes() {
        return [//
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
