<?php

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
Route::get("/db","Joli@index");

Route::get("/test","TestController@getUsers");//kur klikohet te url localhost/.../test do 
//therritet tek kontolleri TestController metoda getUsers