<?php

namespace App\Http\Controllers\Api\V1;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\Models\UserFollower;
use App\Models\Coupon;
use App\Models\Role;
use App\Models\Profile;
 


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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'mobile_no' => 'required|integer',
            'language_id' => 'required|integer',
            'country_id' => 'required|integer',
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


    
    public function follow(Request $request) {

     $user = JWTAuth::parseToken()->authenticate();
     $params = ['user_id' =>$request->user_id,'user_followers_id'=>$user->id];

     $userfollowers =  UserFollower::firstOrCreate($params);

        return response()->json(['success'=>true ,'message' => [trans('common.success_follow')]]);
       
    }

    public function unfollow(Request $request) {

     $user = JWTAuth::parseToken()->authenticate();
     $params = ['user_id' =>$request->user_id,'user_followers_id'=>$user->id];

     $userfollowers =  UserFollower::where($params)->delete();
    
     return response()->json(['success'=>true ,'message' => [trans('common.success_unfollow')]]);
    }




    public function updateUpgrade(Request $request) {

        $user = JWTAuth::parseToken()->authenticate();

        $coupon = Coupon::where('code', $request->coupon)->where('expire_date', '>', date('Y-m-d'))->get();

        if (!$coupon->count())
          return response()->json(['success'=>false ,'message' => [trans('common.wrong_copoun')]]);
     

        $role = Role::find($request->roles);

        $user = User::findOrFail($user->id);

        if (!$user->hasRole($role->id)) {

            $user->attachRole($role->id);

            $updatePoints = Profile::where('user_id', $user->id)->first();
            $updatePoints->points += config('settings.business_points');
            $updatePoints->save();

          return response()->json(['success'=>true ,'message' => [trans('common.success_edit')]]);

         
        }
        
         return response()->json(['success'=>false ,'message' => [trans('common.you_have_this_role')]]);
        
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


    public function showProfile($id) {

        $User = User::with('profile')->find($id);

        return response()->json(['success' => true, 'message' => [], 'data' => $User]);

    }

}
