<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Traits\CaptureIpTrait;
use App\Models\Profile;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use Illuminate\Http\Request;

class UserCrudController extends CrudController
{
    public function setup() {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/users');
        $this->crud->setEntityNameStrings('user', 'users');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->addField([
            'name' => 'first_name',
            'label' => __('auth.first_name'),
            'wrapperAttributes' => [
                'class' => 'col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'last_name',
            'label' => __('auth.last_name'),
            'wrapperAttributes' => [
                'class' => 'col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'separator',
            'type' => 'custom_html',
            'value' => '<div class="clearfix"></div>'
        ]);

        $this->crud->addField([
            'name' => 'email',
            'label' => __('auth.email'),

        ]);

        $this->crud->addField([
            'label' => __('auth.roles'),
            'type' => 'select_multiple',
            'name' => 'roles',
            'entity' => 'roles',
            'attribute' => 'name',
            'model' => '\jeremykenedy\LaravelRoles\Models\Role',
            'pivot' => true,
        ]);

        $this->crud->addField([
            'name' => 'password',
            'type' => 'password',
            'label' => __('auth.password'),
            'hint' => __('auth.leave_password_blank_for_not_modification')
        ]);

        $this->crud->addField([
            'name' => 'password_confirmation',
            'type' => 'password',
            'label' => __('auth.confirmPassword'),
        ]);

        $this->crud->addField([
            'name' => 'password_confirmation',
            'type' => 'password',
            'label' => __('auth.confirmPassword'),
        ]);

        $this->crud->addField([
            'name' => 'signup_ip_address',
            'label' => __('auth.signup_ip_address'),
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'signup_confirmation_ip_address',
            'label' => __('auth.signup_confirmation_ip_address'),
            'attributes' => [
                'readonly' => 'readonly'
            ],
            'wrapperAttributes' => [
                'class' => 'col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'separator',
            'type' => 'custom_html',
            'value' => '<div class="clearfix"></div>'
        ]);

        $this->crud->addField([
            'name' => 'admin_ip_address',
            'label' => __('auth.admin_ip_address'),
            'attributes' => [
                'readonly' => 'readonly'
            ],
            'wrapperAttributes' => [
                'class' => '  col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'updated_ip_address',
            'label' => __('auth.updated_ip_address'),
            'attributes' => [
                'readonly' => 'readonly'
            ],
            'wrapperAttributes' => [
                'class' => 'col-md-6'
            ]
        ]);

        $this->crud->addField([
            'name' => 'separator',
            'type' => 'custom_html',
            'value' => '<div class="clearfix"></div>'
        ]);

        $this->crud->addField([
            'name' => 'deleted_ip_address',
            'label' => __('auth.deleted_ip_address'),
            'attributes' => [
                'readonly' => 'readonly'
            ]
        ]);

        $this->crud->addColumn([
            'name' => 'name',
            'label' => __('auth.name'),
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'label' => __('auth.email'),
        ]);

        $this->crud->addColumn([
            'label' => __('auth.roles'), // Table column heading
            'type' => "select_multiple",
            'name' => 'roles', // the method that defines the relationship in your Model
            'entity' => 'roles', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\\Models\\Role", // foreign key model
        ]);

        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => __('auth.created_at'),
            'type' => 'datetime'
        ]);

        $this->crud->addFilter([
            'type' => 'simple',
            'name' => 'trashed',
            'label' => 'Trashed'
        ], false, function () {
            $this->crud->query = $this->crud->query->onlyTrashed();
        });

    }

    public function store(StoreRequest $request) {

        $ipAddress = new CaptureIpTrait;

        $request->request->set('activated', '1');
        $request->request->set('token', str_random(64));
        $request->request->set('admin_ip_address', $ipAddress->getClientIp());
        $request->request->set('password', bcrypt($request->input('password')));

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here

        $profile    = new Profile;
        $this->crud->entry->profile()->save($profile);
        $this->crud->entry->attachRole($request->input('role'));

        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request) {

        $ipAddress = new CaptureIpTrait;

        $request->request->set('updated_ip_address', $ipAddress->getClientIp());

        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $profile    = new Profile;
        $this->crud->entry->profile()->save($profile);
        $this->crud->entry->attachRole($request->input('role'));

        return $redirect_location;
    }

    public function destroy($id, Request $request = null) {

        $ipAddress   = new CaptureIpTrait;
        $currentUserId = \Auth::id();
        $user        = User::findOrFail($id);

        if ($user->id != $currentUserId) {

            $request->request->set('deleted_ip_address', $ipAddress->getClientIp());
            return parent::destroy($id);
        }

        return back()->with('error', trans('auth.deleteSelfError'));
    }
}
