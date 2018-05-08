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

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Auth::routes();

Route::group(['middleware' => ['web']], function () {

    Route::group([], function () {
        Route::get('/home', 'HomeController@index');
    });

    Route::group(['namespace' => 'Admin', 'middleware' => 'isAdmin'], function () {
        Route::get('/admin', 'DashboardController@index');
    });
});