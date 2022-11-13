<?php

// you create a new route for admin

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Front\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// first way to pass data with view

// Route::get('/admin', function () {
//     return view('admin')->with(['data' =>'ali gamal ali','age'=>30]);
// });

// second way to pass data with view
// Route::get('/admin', function () {
//     return view('admin',['data' =>'ali gamal ali','age'=>30,'gender'=>'male']);
// });

// third way to pass data with view
// Route::get('/admin', function () {
//     $data=[];
//     $data['data']='ali gamal ali';
//     $data['age']=30;
//     $data['gender']='male';
//     return view('admin',$data);
// });
// fourth way to pass data with view
// Route::get('/admin', function () {
//     $obj=new \stdClass();
//     $obj->data='ali gamal ali';
//     $obj->age=30;
//     $obj->gender='male';
//     return view('admin',compact('obj'));
// });


// check Name Space for routes and add Group
// first make folder name is Front and make method in it


// two way to namespace routes
// second
// Route::group(['namespace'=>'App\Http\Controllers\Front'], function(){
//     Route::get('string','UserController@getString0');
//     Route::get('string1','UserController@getString1');
//     Route::get('string2','UserController@getString2');
// });
// check login from middleware auth
// Route::get('login',function (){
//     return 'you must login';
// })->name('login');

// first
// Route::namespace('App\Http\Controllers\Front')->group(function () {
// Route::namespace('Front')->group(function () {
    // Route::get('users',[UserController::class, 'getAdminName']);
    // Route::get('users','UserController@getAdminName');
    // Route::get('admins','UserController@getUserName');
    // Route::get('admins',[UserController::class, 'getUserName']);
// });

// check middleware group for routes and make prefix
// Route::group(['prefix'=>'user','middleware'=>'auth'], function (){
//     Route::get('users',[Front\UserController::class, 'getAdminName']);
//     Route::get('admins',[Front\UserController::class, 'getUserName']);
// });