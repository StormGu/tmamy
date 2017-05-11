<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Backpack\CRUD\app\Http\Requests\CrudRequest;
use Illuminate\Validation\Factory;

class AdvertisementRequest extends CrudRequest
{
    public function __construct(Factory $factory) {

        $name = 'points_expired';

        $test = function ($attribute, $value, $parameters, $validator) {
            return ($value >= 0) ? true : false;
        };

        $errorMessage = __('advertisement.points_expired');

        $factory->extend($name, $test, $errorMessage);
    }

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
            'after_points' => 'points_expired',
            'title' => 'required',
            'price' => 'required|numeric',
            'mobile' => 'required',
            'currency_id' => 'required',
            'image' => 'required',
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
