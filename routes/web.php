<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () {
    Route::get('/', function () {
        return redirect()->route('admin-analytic');
    });

    Route::get('/analytic', 'DashboardController@analytic')->name('admin-analytic');
    Route::get('/sale', 'DashboardController@sale')->name('admin-sale');

    Route::group(['prefix' => 'pitch'], function () {
        Route::get('/', 'PitchController@list');
    });
});
