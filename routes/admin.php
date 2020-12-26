<?php
use App\Http\Controllers\Controller;
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
Route::namespace("First")->group(function (){
    Route::group(array("prefix" =>"admin"),function (){
        Route::get("/users","myController@users");
        Route::get("/panel","myController@panel");
    });
});
