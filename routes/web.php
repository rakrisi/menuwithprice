<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/','front_end/index');
Route::view('/about','front_end/about');
Route::view('/contact','front_end/contact');
Route::view('/privacy','front_end/privacy');
Route::view('/term','front_end/term');

Route::view('/menu-and-price','front_end/menu-and-price/index');

Route::view('/cuisine','front_end/cuisine/index');

Route::view('/restaurant-near-me','front_end/restaurant-near-me/index');

Route::view('/nutrition','front_end/nutrition/index');
