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

Route::get('/', "PagesController@index");

Route::get('/user', "UserController@profile");
Route::put('/user/{user}', "UserController@profileedit")->name("profileedit");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/logout", 'Auth\LoginController@logout');

Route::group(['prefix' => '/dash', 'middleware' => ['auth', 'admin']], function () {
    Route::get("/", "DashController@index");
    /** Product routes */
    Route::group(['prefix' => '/products'], function () {
        Route::get("/", "DashController@products");
        Route::get("/add", "ProductController@create");
        Route::get("/{product}/edit", "ProductController@edit");
        Route::post("", "ProductController@store");
        Route::put("/{product}", "ProductController@update");
        Route::delete("/{product}", "ProductController@destroy");
    });

    /** User edit forom dash */
    Route::group(['prefix' => '/users'], function () {
        Route::get("/", "UserController@dashIndex");
        Route::delete("/{user}", "UserController@dashDestroy");
    });

    Route::get("/account", "DashController@account");
    Route::put("/account", "DashController@accountEdit");
});

Route::get("/profile/user", "UserController@index");
Route::put("/profile/user/{user}", "UserController@update");


Route::get("/products/","PagesController@products");


