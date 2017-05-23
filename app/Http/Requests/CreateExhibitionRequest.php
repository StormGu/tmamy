<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Backpack\CRUD\app\Http\Requests\CrudRequest;
use Illuminate\Validation\Factory;

class CreateExhibitionRequest extends CrudRequest
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
            'details' => 'required',
            'venue_name' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes() {
        return [
            'venue_name' => __('advertisement.venue_name')
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
