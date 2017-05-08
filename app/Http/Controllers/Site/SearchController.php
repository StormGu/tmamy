<?php

namespace App\Http\Controllers\Site;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request) {

        $limit = $request->get('limit') ? $request->get('limit') : 10;
        $keyword = $request->get('keyword') ? $request->get('keyword') : '';

        $data['breadcrumbs'][__('common.search')] = url('search');

        $objects = Advertisement::query();

        // Filter By title
        if ($criteria = $request->get('keyword')) {
            $objects->where('title', 'LIKE', '%' . $criteria . '%');
        }

        $data['keyword'] = $keyword;
        $data['objects'] = $objects->approved()
            ->paginate($limit)
            ->appends(\Input::except('page'));;

        $data['sponsored'] = Advertisement::approved()->sponsered()->inRandomOrder()->limit(4)->get();


        return View('adforest.search.index', $data);
    }
}
