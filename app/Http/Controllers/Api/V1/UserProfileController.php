<?php

namespace App\Http\Controllers\Api\V1;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;

 
class UserProfileController extends Controller
{


   private $is_success = false;

 

    public function me() {

      $user = JWTAuth::parseToken()->authenticate()->with('profile')->first();;
      return response()->json(['success'=>true ,'message' =>[],'data'=>$user]);
    }

 


 public function updateProfile(Request $request) {

        $user = JWTAuth::parseToken()->authenticate();
        $validator = \Validator::make($request->all(), [
       //     'first_name' => 'required|min:3',
         //   'last_name' => 'required|min:3',
          //  'email' => 'required|email',
          //  'mobile_no' => 'required|integer',
          //  'language_id' => 'required|integer',
          //  'country_id' => 'required|integer',
            'bio' => '',
            'dob' => '',
            'gender_id' => '',
        ]);

        if ($validator->fails())
          return response()->json(['success'=>$this->is_success ,'message' =>$validator->errors()]);
      
        $user->fill($request->only('first_name','last_name','email','mobile_no','language_id','country_id','bio','dob','gender_id'));
        
        $user->save();
        if(is_null($user->profile)){
        $profile = new \App\Models\Profile; 
        $profile->user_id = $user->id;         
        }
        else
        $profile = $user->profile; 

        $profile->location = $request->location;  
        $profile->save(); 

        return response()->json(['success'=>true ,'message' => [trans('common.success_edit')]]);

    }



  /**
     * Update the specified resource in storage.
     *
     * @param Request|\Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateUserPassword(Request $request) {

        $user = JWTAuth::parseToken()->authenticate();

        $validator = \Validator::make($request->all(), [
            'password' => 'required|min:6|max:20|confirmed',
        ], [
            'password.required' => trans('auth.passwordRequired'),
            'password.min' => trans('auth.PasswordMin'),
            'password.max' => trans('auth.PasswordMax'),
        ]);

        if ($validator->fails()) 
          return response()->json(['success'=>$this->is_success ,'message' =>$validator->errors()]);
         
            $user->password = bcrypt($request->password);
            $user->save();

        return response()->json(['success'=>true ,'message' => [trans('common.success_edit')]]);


    }

 
   

  public function updateSocial(Request $request) {

        $user = JWTAuth::parseToken()->authenticate();
        $validator = \Validator::make($request->all(), [
            'facebook' => 'url',
            'twitter' => 'url',
            'googleplus' => 'url',
            'linkedin' => 'url',
            'pinterest' => 'url',
        ]);

        if ($validator->fails())
          return response()->json(['success'=>$this->is_success ,'message' =>$validator->errors()]);
      
        $user->fill($request->only('facebook','twitter','googleplus','linkedin','pinterest'));
        $user->save();

        return response()->json(['success'=>true ,'message' => [trans('common.success_edit')]]);
 
    }


    
    public function follower(Request $request) {


        $userfollowers = new UserFollower();
        $Input = $request->all();

        $userfollowers->user_id = $Input['user_id'];
        $userfollowers->user_followers_id = $Input['user_followers_id'];
        $userfollowers->user_followers_name = $Input['user_followers_name'];

        $userfollowers->save();

        return redirect()->back();
    }

    public function unfollow(Request $request) {
        $Input = $request->all();

        DB::table('user_followers')->where('user_followers_id', $Input['user_followers_id'])->delete();

        return redirect()->back();
    }


    public function stores()
    {
        $user = JWTAuth::parseToken()->authenticate();

        $stores  = $user->stores()->with('category')->get();

        if(count($stores))
            $this->is_success = true;

        return response()->json(['success'=>$this->is_success ,'message' => [],'data'=>$stores], 200);
    }


    public function advertisements() {

        $user = JWTAuth::parseToken()->authenticate();

        $advertisement  = $user->advertisements()->with(['category'])->paginate();
     //toArray();

        if (count($advertisement))
            $this->is_success = true;

        return response()->json(['success' => $this->is_success, 'message' => [], 'data' => $advertisement], 200);
    }


    public function showprofile($id) {
        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

       

        $user_id = \Auth::id();

        return view('adforest.profile.showprofile', $data, compact('user_id'));
    }

    public function SubscribeStore(Request $request) {
        $store_subscription = new StoreSubscription();
        $Input = $request->all();

        $store_subscription->user_id = $Input['user_id'];
        $store_subscription->store_id = $Input['store_id'];


        $store_subscription->save();

        return redirect()->back();
    }

    public function disSubscribeStore(Request $request) {
        $Input = $request->all();


        DB::table('store_subscription')->where('user_id', $Input['user_id'])->delete();

        return redirect()->back();
    }

    public function likeStore(Request $request) {
        $likeStore = new StoreLike();
        $Input = $request->all();

        $likeStore->user_id = $Input['user_id'];
        $likeStore->store_id = $Input['store_id'];


        $likeStore->save();

        return redirect()->back();
    }

    public function disLikeStore(Request $request) {
        $Input = $request->all();

        DB::table('store_like')->where('user_id', $Input['user_id'])->delete();

        return redirect()->back();
    }

    

    public function getfollower($id){
        
        $data['breadcrumbs'][trans('titles.myProfile')] = '#';

        $id = ($id) ? $id : \Auth::id();

        $data['object'] = User::with('profile')->find($id);

       

        
        return view('adforest.profile.followers',$data);
    }

}
