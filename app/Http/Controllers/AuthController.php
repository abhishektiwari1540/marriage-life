<?php

namespace App\Http\Controllers;
use App\Http\Requests\Sign_upRequest;
use App\Http\Requests\loginUserRequest;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('frontend.Auth.login');
    }

    public function sign_up(Request $request){
        return view('frontend.Auth.register');
    }

    public function sign_up_data(Sign_upRequest $request){
        $result = [];
     $users                = new User;
     $users->name           = $request->name;
     $users->email          = $request->email;
     $users->password       = bcrypt($request->password);
     $users->phone_number   = $request->phone_number;
     if($request->term_and_condition == "on"){
        $users->trem_and_conditions = 1;
     };
     $users->save();
     return response()->json(['success' => "User data was save"]);
    }

    public function login_user(loginUserRequest $request){
       $email     = $request->email;
       $password  = $request->password;
       if(Auth::attempt(['email' => $email, 'password' => $password],$request->remember)){
        // $request->session()->regenerate();
        return redirect()->route("frontend.index");
           }else{
        return response()->json(['error' => "User cant login"]);
       }
    }
}
