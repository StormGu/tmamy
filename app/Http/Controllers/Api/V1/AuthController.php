<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use JWTAuth;
use Mockery\CountValidator\Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use Exception as ExceptionLaravel;
use Hash;
use App\Models\User;
use App\Traits\CaptureIpTrait;
use App\Traits\ActivationTrait;
use jeremykenedy\LaravelRoles\Models\Role;



    class AuthController extends Controller
{

    use ActivationTrait;

        private $is_success;

        public function __construct()
        {
            $this->is_success = false;
        }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Response
     */

    public function SignUp(Request $request){
        try{
          

            $data = $request->only(['first_name','last_name','email', 'password','password_confirmation']);
   
            //validate inputs

            $validator = Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:20|confirmed',
            'password_confirmation' => 'required|same:password',
        ], [
            'name.unique' => trans('auth.userNameTaken'),
            'name.required' => trans('auth.userNameRequired'),
            'first_name.required' => trans('auth.fNameRequired'),
            'last_name.required' => trans('auth.lNameRequired'),
            'email.required' => trans('auth.emailRequired'),
            'email.email' => trans('auth.emailInvalid'),
            'password.required' => trans('auth.passwordRequired'),
            'password.min' => trans('auth.PasswordMin'),
            'password.max' => trans('auth.PasswordMax'),
        ]);

            if ($validator->fails()) 
                return ['success'=>false,'message'=>$validator->errors()->all()];
          

        $ipAddress = new CaptureIpTrait;
        $role = Role::where('name', '=', 'Unverified')->first();

        $user = User::create([
            'name' => '',
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'token' => str_random(64),
            'signup_ip_address' => $ipAddress->getClientIp(),
            'activated' => !config('settings.activation'),
            'points' => 0
        ]);

        $user->attachRole($role);
        $this->initiateEmailActivation($user);
        return ['success'=>true,'message'=>['User sign up successfully']];
 

        }catch(ExceptionLaravel $e){
            return ['success'=>false,'message'=>$e->getMessage()];
        }

    }








     public function authenticate(Request $request)
    {
     
       $rules = [
                'email' => 'required|email',
                'password' => 'required|min:3',
                ];


   /*    if($request->referer=="local"){
         $rules['password'] = 'required|min:3';
         $rules['username']  = 'required';
       } 

        else      
         $rules['name']     = 'required|max:255';     
   */

      //validate inputs
        $validator = Validator::make($request->all(),$rules);

       if($validator->fails()) 
         return ['success'=>false,'message'=>$validator->errors()->all()];
           

      // if($request->referer!="local")
      // return $this->LoginSocial($request); 


	/*	if (is_numeric($request->username))
		    $field = 'phone';
		 elseif (filter_var($request->username, FILTER_VALIDATE_EMAIL)) 
		    $field = 'email';
		*/

		$request['activated'] = true;

		$credentials = $request->only('email', 'password','activated');

        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['success'=>false,'message' => ['البريد الإلكتروني أو كلمة المرور خطأ','email or password is incorrect']]);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['success'=>false,'message' => ['could_not_create_token']], 200);


        }

        $user = User::where(['email'=> $request->email])->first();
        //   return $user;
        // if no errors are encountered we can return a JWT
        $user->api_token    = $token;
       // $user->device_token = $request->device_token;
        $user->save();
        return response()->json(['success'=>true,'message' => ['User Login successfully'],'data'=>$user]);

        
    }


    private function LoginSocial($request){
    
     $user = User::whereEmail($request->email)->first();
     
  //   if($user && $user->referer=="local") 
    // return response()->json(['success'=>false,'message'=>['User Already exists']], 200);

    if($user && $user->status!="Active")
      return response()->json(['success'=>false,'message'=>['User Inactive']]);


     if(!$user)
        $user = User::create(
            [
             'email'=>$request->email,
             'name'=>$request->name,
            ]);   
     $token = JWTAuth::fromUser($user);
     $user->api_token = $token;
     $user->save();
     return response()->json(['success'=>true,'message' => ['User Login successfully'],'data'=>$user]);
    }



    public function updateProfile(Request $request){
      
      $inputs = $request->only(['name','phone','city_id']);
   
        $user = JWTAuth::parseToken()->authenticate();
          //validate inputs
          $validator = Validator::make($inputs, [
                'name' => 'required|max:255',
              //  'phone' => 'required|unique:users,phone,'. $user->id .'',
                'phone' => 'required',
                'city_id' => 'required|numeric',
            ]);

            if ($validator->fails())
                return response()->json(['success'=>false,'message'=>$validator->errors()->all()]);
              //n.MnHqTqOVO%
                 $user->name = $request->name;
                 $user->phone = $request->phone;
                 $user->city_id= $request->city_id;
                 if($user->save()){
                 
                  if(!$user->confirmed)
                  Helper::send_sms(trans('front.Lilas Toys Activation Code: '), $user->phone);
         //       $token = JWTAuth::fromUser($user);
        //     $token = JWTAuth::getToken();
        return response()->json(['success'=>true,'message' => ['successfully Updated User'],'data'=>$user]);
             }
    }
    



        public function setLang(Request $request){
      
         $user = JWTAuth::parseToken()->authenticate();
         $user->lang = $request->lang;
         $user->save();
                  
        return response()->json(['success'=>true,'message' => ['successfully Updated User'],'data'=>$user]); 
    }




       //teset
        public function getTokenFirebase(){
      
         $user = JWTAuth::parseToken()->authenticate();
         $firebase_token = Helper::get_firebase_token($user);
        return response()->json(['success'=>true,'message' =>[],'data'=>$firebase_token]); 
    }
    
    
    
    
    
    public function updatePassword(Request $request)
    {
                
       try {

         $user = JWTAuth::parseToken()->authenticate();


            $validator = Validator::make($request->all(), [
                'password' => 'required|min:3',
            ]);

            if ($validator->fails()) 
                return ['success'=>false,'message'=>$validator->errors()->all()];  
    

         if($user->has_password)
         if (!Hash::check($request->current_password,$user->password))
           return response()->json(['success'=>false,'message'=>['The Current Password does not match ']]);
            
       // the token is valid and we have found the user via the sub claim
         $user->password = Hash::make($request->password);
         $user->has_password= true;
         $user->save();
        return response()->json(['success'=>true,'message'=>['successfully Updated Password'],'data'=>$user]);
        }
      
        catch(ExceptionLaravel $e){
         return response()->json(['success'=>false,'message'=>['Error Not Updated Password']]);
        }

   
    }
    



       public function verify(Request $request)
    {
                
       try {

         $user = JWTAuth::parseToken()->authenticate();


            $validator = Validator::make($request->all(), [
                'confirmation_code' => 'required|min:4',
            ]);

            if ($validator->fails()) 
                return ['success'=>false,'message'=>$validator->errors()->all()];  
    

         if($user->confirmed)
           return response()->json(['success'=>false,'message'=>['Your Account Already Confirmed !']]);

         if ($request->confirmation_code!=$user->confirmation_code)
           return response()->json(['success'=>false,'message'=>['The confirmation code does not match ']]);
            
       // the token is valid and we have found the user via the sub claim
         $user->confirmed = true;
         $user->save();
        return response()->json(['success'=>true,'message'=>['successfully verify User']]);
        }
      
        catch(ExceptionLaravel $e){
         return response()->json(['success'=>false,'message'=>['Error : User Not Confirmed']]);
        }

   
    }
    
    
    
    
    
 
 
    
    
    
}
