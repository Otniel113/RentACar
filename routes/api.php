<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('/product/mobilkecil', App\Http\Controllers\API\ApiMobilKecilController::class);
Route::resource('/profile', App\Http\Controllers\API\ApiMemberController::class);
Route::resource('/product/mobilbesar', App\Http\Controllers\API\ApiMobilBesarController::class);
Route::resource('/product/minibus', App\Http\Controllers\API\ApiMinibusController::class);
Route::resource('/booking', App\Http\Controllers\API\ApiBookingController::class);
Route::post('/login', [App\Http\Controllers\API\ApiLoginController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\API\ApiLoginController::class, 'logout']);
Route::post('/register', [App\Http\Controllers\API\ApiRegisterController::class, 'store']);