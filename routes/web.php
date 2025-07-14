<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('frontend.index');
 Route::get('/About',[App\Http\Controllers\HomeController::class,'about'])->name('frontend.about');
 Route::get('/Contact',[App\Http\Controllers\HomeController::class,'contact'])->name('frontend.contact');
 Route::group(['middleware' => ['web']], function(){

 Route::get('/dashboard',[App\Http\Controllers\HomeController::class,'dashboard'])->name('frontend.dashboard');
 Route::get('/user-profile',[App\Http\Controllers\HomeController::class,'user_profile'])->name('frontend.user_profile');
 Route::get('/user-profile-edit',[App\Http\Controllers\HomeController::class,'user_profile_edit'])->name('frontend.user_profile_edit');
 Route::post('/user-profile-data',[App\Http\Controllers\HomeController::class,'user_profile_data'])->name('frontend.user_profile_data');

 });
 Route::get('/login',[App\Http\Controllers\AuthController::class,'login'])->name('frontend.login');
 Route::get('/sign-up',[App\Http\Controllers\AuthController::class,'sign_up'])->name('frontend.sign_up');
 Route::post('/sign-up-data',[App\Http\Controllers\AuthController::class,'sign_up_data'])->name('frontend.sign_up_data');
 Route::post('/login-data',[App\Http\Controllers\AuthController::class,'login_user'])->name('frontend.login_user');
