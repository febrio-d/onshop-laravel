<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerAuthController;

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

Route::get('/', [AuthController::class, 'index'])->middleware('guest');


Route::get('/signin', [AuthController::class, 'signin'])->middleware('guest');
Route::post('/signin', [AuthController::class, 'storesignin']);
Route::get('/signup', [AuthController::class, 'signup'])->middleware('guest');
Route::post('/signup', [AuthController::class, 'storesignup']);
Route::post('/signout', [AuthController::class, 'signout']);


Route::get('/sellersignin', [SellerAuthController::class, 'index'])->middleware('guest');
Route::get('/sellersignup', [SellerAuthController::class, 'signup'])->middleware('guest');


Route::get('/home', function () {
	return view('home.index', [ 'title' => 'Home' ]);
})->middleware('auth');