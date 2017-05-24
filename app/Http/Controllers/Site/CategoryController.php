<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index(Request $request, $category_id) {
        //        dd(\App\Models\Category::whereParentId($category_id)->withCount('advertisements')->get());

        $limit = $request->get('limit') ? $request->get('limit') : 6;

        $data = [];

        $category = Category::find($category_id);
        $data['breadcrumbs'][$category->name] = '#';

        $data['category_id'] = $category_id;
        $data['object'] = $category;

        $categories_array = [];

        $this->getChildren($categories_array, $category_id);

        $data['objects'] = Advertisement::whereIn('category_id', $categories_array + ['' => $category_id])
            ->approved()
            ->paginate($limit)
            ->appends(\Input::except('page'));;

        $data['sponsored'] = Advertisement::approved()->sponsered()->inRandomOrder()->limit(4)->get();

        $cat_id = $category_id;

        return View('adforest.category.index', $data, compact('cat_id'));
    }

    public function getChildren(&$categories_array, $category_id) {

        $children = Category::whereParentId($category_id)->get();
        $categories_array = $categories_array + $children->pluck('id', 'id')->toArray();

        foreach ($children as $child) {
            $this->getChildren($categories_array, $child->id);
        }
    }
}
