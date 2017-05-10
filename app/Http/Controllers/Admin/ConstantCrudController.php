<?php

namespace App\Http\Controllers\Admin;

use App\Models\ConstantKey;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ConstantRequest as StoreRequest;
use App\Http\Requests\ConstantRequest as UpdateRequest;

class ConstantCrudController extends CrudController
{

    public function setUp() {

        $this->crud->setModel('App\Models\Constant');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/constants');
        $this->crud->setEntityNameStrings('Constant', 'Constants');

        $constant_keys = ConstantKey::pluck('name', 'name');

        $this->crud->addField([
            'name' => 'key',
            'label' => trans('constant.key'),
            'type' => 'select_from_array',
            'options' => $constant_keys
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
