<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index() {
        $data = [];
        $categories = Category::parents()->get();

        foreach ($categories as $category) {

            $categories_array = [];

            $this->getChildren($categories_array, $category->id);

            $data['objects'][$category->id] = Advertisement::whereIn('category_id', $categories_array + ['' => $category->id])
                ->approved()
                ->limit(12)
                ->get();

        }

        return View('adforest.home.index', $data);
    }

    public function storesHotSelling() {
    }

    public function getChildren(&$categories_array, $category_id) {

        $children = Category::whereParentId($category_id)->get();
        $categories_array = $categories_array + $children->pluck('id', 'id')->toArray();

        foreach ($children as $child) {
            $this->getChildren($categories_array, $child->id);
        }
    }
}
