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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/logout",'Auth\LoginController@logout');

Route::group(['prefix'=>'/dash'],function(){
    Route::get("/products","ProductController@create");
    Route::post("/products","ProductController@store");

});

Route::get("/profile/user","UserController@index");
Route::put("/profile/user/{user}","UserController@update");