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

        $data['objects'] = Advertisement::whereCategoryId($category_id)
            ->approved()
            ->paginate($limit)
            ->appends(\Input::except('page'));;

        $data['sponsored'] = Advertisement::approved()->sponsered()->inRandomOrder()->limit(4)->get();

        return View('adforest.category.index', $data);

    }

}
