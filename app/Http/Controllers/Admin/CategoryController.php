<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Request $request){

        // Get Sort, OrderBy, Limit.
        $sort = $request->get('sort') ? $request->get('sort') : 'id';
        $order = $request->get('order') ? $request->get('order') : 'desc';
        $limit = $request->get('limit') ? $request->get('limit') : 10;

        $this->data['breadcrumbs'][] = array(
            'text' => trans('categories.browse'),
            'href' => '#',
        );

        // Get Selected
        $this->data['selected'] = $request->input('selected') ? $request->input('selected') : [];

        $this->data['objects'] = Category::orderBy($sort, $order)
            ->paginate($limit)
            ->appends(\Input::except('page'));

        return view('admin.categories.index', $this->data);
    }


}
