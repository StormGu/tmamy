<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use JWTAuth;

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

        $user = JWTAuth::parseToken()->authenticate();

        $adv = new Advertisement;

        $Input = $request->all();

        $adv->category_id = $Input['category_id'];

        $filelogo = $request->file('image_filename');
        $logoName = time() . '.' . $filelogo->getClientOriginalName();
        $filelogo->move("uploads/", $logoName);

        $adv->advertisementno = 1555;
        $adv->title = $Input['title'];
        $adv->user_id = $user->id;
        $adv->category_id = $Input['category_id'];
        $adv->country_id = $Input['country_id'];
        $adv->title = $Input['title'];
        $adv->details = $Input['details'];
        $adv->mobile_no = $Input['mobile_no'];
        $adv->phone_no = $Input['phone_no'];
        $adv->advertisment_date = $Input['advertisment_date'];
        $adv->expiry_date = $Input['expiry_date'];
        $adv->advertisment_type_id = $Input['advertisment_type_id'];
        $adv->price = $Input['price'];
        $adv->image_filename = 'uploads/' . $logoName;

        if ($user->Points == 0) 
           return response()->json(['success'=> false,'message' => [trans('common.failed_added')]]);
       
       
            $user->Points = $user->Points - 300;
            $user->save();
            $adv->save();
          return response()->json(['success'=> true,'message' => [trans('common.success_added')]]);



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
