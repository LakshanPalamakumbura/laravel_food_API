<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFavouritesController;
use App\Http\Controllers\AuthController;

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

Route::post('/register', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::post('/logout', [AuthController::class, 'logoutUser'])->middleware('auth:sanctum');

Route::resource('/food', FoodController::class);
Route::middleware('auth:sanctum')->group(function () {
     Route::get('/user', [UserController::class, 'identifyUser']);
     Route::get('/userfavourite', [UserFavouritesController::class, 'getFav']);
     Route::post('/userfavourite/add/{food_id}', [UserFavouritesController::class, 'addFav']); 
     Route::get('/userfavourite/remove/{food_id}', [UserFavouritesController::class, 'removeFav']);
 });

//localhost:8000/fav/user/1