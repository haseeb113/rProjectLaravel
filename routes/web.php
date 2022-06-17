<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\VendorController;
use \App\Http\Controllers\FetchController;
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

//showlogin
Route::get('Showlogin', [HomeController::class, 'ShowLogin']);
//logout
Route::get('logout', [HomeController::class, 'LogoutAction']);
//verifylogin
Route::post('verifylogin', [HomeController::class, 'VerifyLogin']);
//show admin dash
Route::get('showdash', [DashboardController::class, 'ShowDashboard']);
//ShowaddProducform
Route::get('showpform',[DashboardController::class,'ShowPform']);
//show add product
Route::get('addproduct', [DashboardController::class, 'AddProduct']);
//saveproduct
Route::post('saveproduct', [DashboardController::class, 'SaveProduct']);
//show product
Route::get('showproduct',[DashboardController::class,'ShowProducts']);
//delete product
Route::get('delete/{id}',[DashboardController::class,'DeleteProduct']);
//show user
Route::get('showuser',[DashboardController::class,'ShowUserData']);
//show r product
Route::get('showrproduct',[DashboardController::class,'ShowReviews']);

//show v dash
Route::get('showvdash',[VendorController::class,'ShowVendorDashboard']);
//show v reg
Route::get('showVendorlogin',[HomeController::class,'ShowRegister']);
//savevendor
Route::post('savevendor',[HomeController::class,'SaveVendor']);
//verifyVlogin
Route::post('VerifyVendorLogin',[HomeController::class,'VerifyVendorLogin']);
//editproduct
Route::get('edit/{id}',[DashboardController::class,'EditProduct']);
//approveuser
Route::get('approve/{id}',[FetchController::class,'userapproval']);
//rejectuser
Route::get('reject/{id}',[FetchController::class,'userrejection']);