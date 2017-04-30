<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\User;

class UserRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        $user = User::find($this->id);

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {

                $rules = [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required|email|max:255|unique:users',
                    'roles' => 'required'
                ];

                if ($this->input('password')) {
                    return $rules + [
                        'password' => 'required|min:6|max:20|confirmed',
                        'password_confirmation' => 'required|same:password',
                    ];
                }

                return $rules;
            }
            case 'PUT':
            case 'PATCH': {
                $rules = [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'roles' => 'required'
                ];

                if ($this->input('password')) {
                    return $rules + [
                        'password' => 'required|min:6|max:20|confirmed',
                        'password_confirmation' => 'required|same:password',
                    ];
                }

                return $rules;
            }
            default:
                break;
        }


    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes() {
        return [
            'first_name.required' => trans('auth.fNameRequired'),
            'last_name.required' => trans('auth.lNameRequired'),
            'email.required' => trans('auth.emailRequired'),
            'email.email' => trans('auth.emailInvalid'),
            'password.required' => trans('auth.passwordRequired'),
            'password.min' => trans('auth.PasswordMin'),
            'password.max' => trans('auth.PasswordMax'),
            'roles.required' => trans('auth.roleRequired')
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
