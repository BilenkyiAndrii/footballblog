<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\ChampionateController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::apiResource('categories', CategoryApiController::class);
Route::get('/championate', [ChampionateController::class, 'index']);

Route::get('/posts', [PostApiController::class, 'index']);
Route::get('/posts/{id}', [PostApiController::class, 'show']);


Route::apiResource('users', UserController::class );


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



