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


    private $is_success= false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store  = Store::orderBy('id','desc')->paginate(20)->toArray();

        if(count($store))
            $this->is_success = true;

      return response()->json(['success'=>$this->is_success ,'message' => [],'data'=>$stroe]);
    }
 




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $store = new Store();
        $store->fill($request->all());
        $store->user_id = $user->id;
        $store->status = 'waiting_approval';

        if ($store->save()) {

            if (\Input::hasFile('image')) {
                $this->uploadPic($store->id, \Input::file('image'));
           return response()->json(['success'=> true,'message' => [trans('common.success_added')]]);
            }
      }

     return response()->json(['success'=> false,'message' => [trans('common.failed_added')]]);

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






 private function uploadPic($id, $file) {

        $image_path = storage_path('stores' . DIRECTORY_SEPARATOR . $id);

        if (!\File::exists($image_path)) {
            \File::makeDirectory($image_path, 0755, true, true);
        }

        $filename = md5($file) . '.' . $file->getClientOriginalExtension();
        \Image::make($file)->save($image_path . DIRECTORY_SEPARATOR . $filename);
        \DB::table('store')->where('id', $id)->update(['logo_file_name' => $filename]);
    }

}
