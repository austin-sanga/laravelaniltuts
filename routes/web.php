<?php

use Illuminate\Support\Facades\Route;

// this down are controllers and thats how they are called
use App\Http\Controllers\memberController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\querryBuilder;
use App\Http\Controllers\aggregatecontroller;
use App\Http\Controllers\joinscontroller;
use App\Http\Controllers\accessorController;
use App\Http\Controllers\mutatorController;
use App\Http\Controllers\oneoneController;
use App\Http\Controllers\onemanyController;
use App\Http\Controllers\fluentString;
use App\Http\Controllers\routemodel;
use App\Http\Controllers\customer2Controller;

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



Route::get('/', function () {
    return view('welcome');
});

// route for pagination controller
Route::get('list',[memberController::class,'show']);

// route for add user controller
Route::POST('add',[usercontroller::class,'addData']);

// writing the delete route
// also pass variable your going to delete
Route::get('delete/{DEPTNUM}',[memberController::class,'delete']);

// This the route to the edit
Route::get('edit/{DEPTNUM}',[memberController::class,'editData']);

// so now making a route for the edit route in the edit form at the edit.blade.php
// keep note you can use same route what matters is a differnr method to be used
Route::post('edit',[memberController::class,'updateData']);

// Route to add user.
Route::view('add','adduser');

// Route to the querry builder controlller
Route::get('querryb',[querryBuilder::class, 'dboperations']);

// Route for the aggregate controller
Route::get('aggregate',[aggregatecontroller::class,'operations']);

// Route to joins Controller
Route::get('joinshow',[joinscontroller::class,'joinshow']);

// Route for accessor topic/controller
Route::get('accessor',[accessorController::class,'index']);

// Route to the mutator Controller
Route::get('mutator',[mutatorController::class,"mutate"]);

// Route to the one to one relation controller
Route::get('oneone',[oneoneController::class,"onetoone"]);

// Route to the one to many relation controller
Route::get('onemany',[onemanyController::class,"onetomany"]);

// Route to the fluent string Controller
Route::get('fluent',[fluentString::class,'fluent']);

//Route to Route model binding controller
// after the key its me declaring from which column to pull data
// ROute model binding uses route to pull data
Route::get('route/{key:id}',[routemodel::class,'route']);

// Route to multiple database connection
// customer2 controller
Route::get('customer2',[customer2Controller::class,"list"]);