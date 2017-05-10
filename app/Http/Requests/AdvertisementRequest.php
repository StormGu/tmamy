<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdvertisementRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{

    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'title' => 'required',
            'price' => 'required|numeric',
            'mobile' => 'required',
            'currency_id' => 'required',
            'image' => 'required',
            'after_points' => 'required|min:0'
        ];

    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes() {
        return [
            'title' => __('advertisement.title'),
            'price' => __('advertisement.price'),
            'mobile' => __('advertisement.mobile'),
            'image' => __('advertisement.image'),
            'currency_id' => __('advertisement.currency_id')
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
