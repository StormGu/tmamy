<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|min:3|max:64',
            'email' => 'required|email',
            'subject' => 'required|min:10|max:100',
            'message' => 'required|min:3|max:3000',
        ];
    }

    public function attributes() {
        return [
            'name' => trans('contact.name'),
            'email' => trans('contact.email'),
            'subject' => trans('contact.subject'),
            'message' => trans('contact.message'),
        ];
    }
}
