<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ConstantRequest as StoreRequest;
use App\Http\Requests\ConstantRequest as UpdateRequest;

class ConstantCrudController extends CrudController
{

    public function setUp() {

        $this->crud->setModel('App\Models\Constant');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/constants');
        $this->crud->setEntityNameStrings('Constant', 'Constants');


        $this->crud->addField([
            'name' => 'key',
            'label' => trans('constant.key'),
            'type' => 'select_from_array',
            'options' => [
                'gender' => trans('constant.gender'),
                'currency' => trans('constant.currency'),
                'career_level' => trans('constant.career_level'),
                'work_experience' => trans('constant.work_experience'),
                'education_level' => trans('constant.education_level'),
                'employment_status' => trans('constant.employment_status'),
                'no_of_kitchen' => trans('constant.no_of_kitchen'),
            ]
        ]);


        $this->crud->addField([
            'label' => trans('constant.value'),
            'name' => 'value'
        ]);

        $this->crud->addColumn([
            'label' => trans('constant.key'),
            'type' => 'model_function',
            'function_name' => 'getKeyTrans'
        ]);

        $this->crud->addColumn([
            'name' => 'value',
            'label' => trans('constant.value')
        ]);

    }

    public function store(StoreRequest $request) {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request) {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
