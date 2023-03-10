<?php

use App\Http\Controllers\userauth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/home', 'home');
Route::view('/shop', 'shop');
Route::view('/cart','cart');    
Route::view('/productDetail','productDetail');    
Route::view('/','adminBase');
Route::view('/login','login');    
Route::post('/login_page',[userauth::class,'loginData']);

