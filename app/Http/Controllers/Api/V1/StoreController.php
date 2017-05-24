<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\Models\Store;
use App\Models\StoreLike;
use App\Models\StoreSubscription;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store  = Store::orderBy('id','desc')->paginate(20)->toArray();

        if(count($store))
            $is_success = true;

        return response()->json(['success'=>$is_success ,'message' => [],'data'=>$store], 200);
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        $store->setRelation('advertisements', $store->children()->paginate());
        if(count($store))
            $this->is_success= true;

        return response()->json(['success'=>$this->is_success ,'message' =>[],'data'=>$store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function likeStore(Request $request) {
      
      $user = JWTAuth::parseToken()->authenticate();
      $params = ['user_id' =>$user->id,'store_id'=>$request->store_id];

      $StoreLike =  StoreLike::firstOrCreate($params);

       return response()->json(['success'=>true ,'message' => [trans('common.success_follow')]]);
 
    }



    public function disLikeStore(Request $request) {

     $user = JWTAuth::parseToken()->authenticate();
     $params = ['user_id' =>$user->id,'store_id'=>$request->store_id];

     $StoreLike =  StoreLike::where($params)->delete();
    
     return response()->json(['success'=>true ,'message' => [trans('common.success_unfollow')]]);
    }



    public function SubscribeStore(Request $request) {
      
      $user = JWTAuth::parseToken()->authenticate();
      $params = ['user_id' =>$user->id,'store_id'=>$request->store_id];

      $store_subscription =  StoreSubscription::firstOrCreate($params);

        return response()->json(['success'=>true ,'message' => [trans('common.success_Subscribe')]]);
 
    }
 


    public function disSubscribeStore(Request $request) {

     $user = JWTAuth::parseToken()->authenticate();
     $params = ['user_id' =>$user->id,'store_id'=>$request->store_id];

     $StoreSubscription =  StoreSubscription::where($params)->delete();
    
     return response()->json(['success'=>true ,'message' => [trans('common.success_unfollow')]]);
    }





}
