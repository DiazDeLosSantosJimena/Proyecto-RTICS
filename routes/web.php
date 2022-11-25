<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\DirectionsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\TypeofusersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Dashboard;

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
/*Route::get('Classrooms',[ClassroomsController::class, 'index'])->name('classroom');
Route::post('Classrooms',[ClassroomsController::class, 'index'])->name('classroom');
Route::put('Classrooms',[ClassroomsController::class, 'index'])->name('classroom');
Route::delete('Classrooms',[ClassroomsController::class, 'index'])->name('classroom');

Route::get('Directions',[DirectionsController::class, 'index'])->name('direction');
Route::post('Directions',[DirectionsController::class, 'index'])->name('direction');
Route::put('Directions',[DirectionsController::class, 'index'])->name('direction');
Route::delete('Directions',[DirectionsController::class, 'index'])->name('direction');

Route::get('Reports',[ReportsController::class, 'index'])->name('report');
Route::post('Reports',[ReportsController::class, 'index'])->name('report');
Route::put('Reports',[ReportsController::class, 'index'])->name('report');
Route::delete('Reports',[ReportsController::class, 'index'])->name('report');

Route::get('Typeofusers',[TypeofusersController::class, 'index'])->name('typeofuser');
Route::post('Typeofusers',[TypeofusersController::class, 'index'])->name('typeofuser');
Route::put('Typeofusers',[TypeofusersController::class, 'index'])->name('typeofuser');
Route::delete('Typeofusers',[TypeofusersController::class, 'index'])->name('typeofuser');

Route::get('Users',[UsersController::class, 'index'])->name('user');
Route::post('Users',[UsersController::class, 'index'])->name('user');
Route::put('Users',[UsersController::class, 'index'])->name('user');
Route::delete('Users',[UsersController::class, 'index'])->name('user');*/


Route::resource('classrooms',ClassroomsController::class);
Route::resource('directions',DirectionsController::class);
Route::resource('reports',ReportsController::class);
Route::resource('typeofusers',TypeofusersController::class);
Route::resource('users',UsersController::class);

//  Route::get('/',  function () {
//      return view('welcome');
//  });
Route::get('/',[App\Http\Controllers\Dashboard::class, 'index']);