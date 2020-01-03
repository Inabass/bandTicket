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

Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->as('admin.')->group(function () {

        Route::get('/home', 'HomeController@index')->name('home');

        Route::prefix('/bands')->as('band.')->group(function () {
            Route::get('/', 'BandController@index')->name('index');
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
