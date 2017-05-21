<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $is_success = false;

    public function index() {
        $advertisement = Advertisement::orderBy('id', 'desc')->paginate(20)->toArray();

        if (count($advertisement))
            $is_success = true;

        return response()->json(['success' => $is_success, 'message' => [], 'data' => $advertisement], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $advertisement = Advertisement::with(['photos','user'])->find($id);

        if (count($advertisement))
            $this->is_success = true;

        return response()->json(['success' => $this->is_success, 'message' => [], 'data' => $advertisement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
    public function getadsbasedcat()
    {
       
       $cat = Category::parents()->with([
            'latestAdvertisements' => function ($query) {
             $query->where('is_free',0);
             $query->with('user'); 
             $query->with('user.profile'); 
            }
        ])->get();

        if (count($cat))
            $this->is_success = true;

        return response()->json(['success' => $this->is_success, 'message' => [], 'data' => $cat]);
    }
}
