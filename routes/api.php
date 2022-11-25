<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassroomsController;
use App\Http\Controllers\Api\DirectionsController;
use App\Http\Controllers\Api\ReportsController;
use App\Http\Controllers\Api\TypeofusersController;
use App\Http\Controllers\Api\UsersController;

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
/*Route::Apiresource('rapi',ClassroomsController::class)->except(['edit','destroy']);
Route::Apiresource('rapi',DirectionsController::class)->except(['edit','destroy']);
Route::Apiresource('rapi',ReportsController::class)->except(['edit','destroy']);
Route::Apiresource('rapi',TypeofusersController::class)->except(['edit','destroy']);
Route::Apiresource('rapi',UsersController::class)->except(['edit','destroy']);*/

Route::Apiresource('classrooms',ClassroomsController::class); 
Route::Apiresource('directions',DirectionsController::class); 
Route::Apiresource('reports',ReportsController::class); 
Route::Apiresource('typeofusers',TypeofusersController::class); 
Route::Apiresource('users',UsersController::class); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
