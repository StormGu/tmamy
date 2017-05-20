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

        $limit = $request->get('limit') ? $request->get('limit') : 2;

        $data = [];

        $category = Category::find($category_id);
        $data['breadcrumbs'][$category->name] = '#';

        $data['category_id'] = $category_id;
        $data['object'] = $category;


        $this->getChildren($data, $category_id);

        $categories = [];
        $data['objects'] = Advertisement::whereIn('category_id', $categories)
            ->approved()
            ->paginate($limit)
            ->appends(\Input::except('page'));;

        $data['sponsored'] = Advertisement::approved()->sponsered()->inRandomOrder()->limit(4)->get();

        $cat_id = $category_id;
        return View('adforest.category.index', $data, compact('cat_id'));

    }

    public function getChildren(&$data, $category_id) {

        $data['categories'] = [];

        $children = Category::whereParentId($category_id)->get();

        $data['categories'] = $children->toArray();


        foreach ($children as $child) {
            $data['categories'][] = $this->getChildren($data, $child->id);
        }
        dd($data['categories']);
    }
}
