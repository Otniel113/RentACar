<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware(
    'guest'
);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', 'App\Http\Controllers\BackRegisterController@index');
Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/gallery', 'App\Http\Controllers\GalleryController@index');
Route::get('/faq', 'App\Http\Controllers\FAQController@index');
Route::get('/contactus', 'App\Http\Controllers\ContactUsController@index');
Route::resource(
    '/product/mobilkecil',
    App\Http\Controllers\MobilKecilController::class
);
Route::resource(
    '/product/mobilbesar',
    App\Http\Controllers\MobilBesarController::class
);
Route::resource(
    '/product/minibus',
    App\Http\Controllers\MinibusController::class
);
Route::resource('/profile', App\Http\Controllers\MemberController::class);
