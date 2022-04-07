<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\getAPI;
use App\Http\Controllers\postAPI;
use App\Http\Controllers\APIresourceController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\fileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// a group middleware to enact the login parameters
// meaning pages you can access only when logged in
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::apiResource('APIresource',APIresourceController::class);
    Route::get('dummy',[dummyAPI::class,'dummy']);
    
    
    });

// this is route to the dummyAPI controller
// Route::get('dummy',[dummyAPI::class,'dummy']);

// Route to controller for Get data with API
Route::get('getAPI',[getAPI::class,'list']);

// Route for post Api Controller
Route::post('addAPI',[postAPI::class,"addAPI"]);

// Route for the passes through the post A PI conroller\
Route::put('putAPI',[postAPI::class,"updateAPI"]);

// Routefor the delete method passes through the post API
Route::delete('deleteAPI/{FIELDNUM}',[postAPI::class,'deleteAPI']);

// route for the search api through the post API controller
Route::get('searchAPI/{DESCRIP}',[postAPI::class,"searchAPI"]);

// Route for performing test on API validation
Route::post('save',[postAPI::class,"validateAPI"]);

// Route for the API with Resource
// This is one route for all of the functions
// Route::apiResource('APIresource',APIresourceController::class);

// Route for the API authntification with sanctum
// So this page becomes protected 
Route::post("login",[userAuthController::class,'index']);

// Route to the file controller
// Upload file with API
Route::post('upload',[fileController::class,'upload']);