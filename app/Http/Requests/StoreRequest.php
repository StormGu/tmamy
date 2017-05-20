<?php

namespace App\Http\Requests;


use Backpack\CRUD\app\Http\Requests\CrudRequest;

class StoreRequest extends CrudRequest
{

    public function authorize() {
        return \Auth::check();
    }

    public function rules() {
        return [
            'category_id' => 'required',
            'title' => 'required|min:3|max:191',
        ];
    }

    public function attributes() {
        return [];
    }

    public function messages() {
        return [];
    }
}
