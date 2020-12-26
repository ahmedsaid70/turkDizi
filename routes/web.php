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


Auth::routes(["verify" => 'true']);
Route::get('/mydizi', [App\Http\Controllers\HomeController::class, 'mydizi'])->middleware('verified')->name("mydizi");

Route::get('/shows',function (){
    return view("shows");
})->name("shows");

Route::get('/latest',function (){
    return view("home");
})->name("latest");
Route::get('/',function (){
    return view("home");
})->name("home");
/*
 *
Route::get('/home', function () {
    return view('home');
})->name("homepg");
Route::get('/product', function () {
    return view('product');
})->name("product");

Route::get('/checkout',function (){
    return view('checkout');
})->name('checkout');
Route::post('/',"First\myController@create");
Route::get("admin","Controller@home");

 */

