<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileEditRequest;
class HomeController extends Controller
{
    public function index(Request $request){
        return view('frontend.index');
    }

    public function about(Request $request){
        return view('frontend.about');
    }

    public function contact(Request $request){
        return  view('frontend.contact');
    }

    public function dashboard(Request $request){
        return view('frontend.Dashboard');
    }

    public function user_profile(Request $request){
        return view('frontend.user-profile');
    }

    public function user_profile_edit(Request $request){
        return view('frontend.user-profile-edit');
    }

    public function user_profile_data(UserProfileEditRequest $request){
      $data            = User::find(Auth::user()->id);
      $data->gender     = $request->gender;
      $data->city       = $request->city;
      $data->dob        = $request->dob;
      $data->age        = $request->age;
      $data->height     = $request->height;
      $data->weight     = $request->weight;
      $data->father_name = $request->father_name;
      $data->mother_name = $request->mother_name;
      $data->address     = $request->address;
    //   $data->
    }

}
