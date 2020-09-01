<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// note that the prefix is admin for all route file
Route::group(['namespace' => 'Admin', 'middleware' =>'auth:admin'], function (){

   Route::get('index','DashboardController@index')->name('admin.dashboard');

});

Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin'], function(){
    Route::get('/login','LoginController@login')->name('admin.login.page');
    Route::post('/check-login','LoginController@checkLogin')->name('check.admin.login');
});
