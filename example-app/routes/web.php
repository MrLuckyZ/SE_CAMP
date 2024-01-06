<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/mycontroller", [MyController::class,"index"]); //ver1
Route::get("/mycontrollerV2", 'App\Http\Controllers\MyController@store'); //ver 2

Route::get('/', function(){
    return view('welcome');
});

Route::get('/my-route', function(){
    $data['val_a'] = "Multiply Table";
    return view('test.mainpage',$data);
});

Route::get('/test-interface', function(){
    return view('test.testinterface');
});

Route::post('/my-route', function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('my-route', $data);
});

