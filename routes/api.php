<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\DirectionsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\TypeofusersController;
use App\Http\Controllers\UsersController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
