<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FetchController;
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
Route::post('SaveU',[FetchController::class,'Saveuser']);
Route::post('login',[FetchController::class,'CheckLogin']);
//save review prod
Route::post('saveRP',[FetchController::class,'SaveReview']);
//show prod in react
Route::get('showp',[FetchController::class,'ShowProducts']);
//show by id
Route::post('showbyid',[FetchController::class,'ShowProductbyID']);
//show ReveiewList by ID
Route::post('ShowRID',[FetchController::class,'ShowRProduct']);
//count reviews
Route::post('countR',[FetchController::class,'ReviewCount']);