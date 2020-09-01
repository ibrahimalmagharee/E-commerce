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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::group(['namespace' => 'Admin', 'middleware' =>'auth:admin', 'prefix' => 'admin'], function (){

        Route::get('index','DashboardController@index')->name('admin.dashboard');
        Route::get('logout','LoginController@logout')->name('admin.logout');

        Route::group(['prefix' => 'settings'], function (){
            Route::get('shipping-method/{type}', 'SettingsController@editShippingMethod')->name('edit.shipping');
            Route::put('shipping-method/{id}', 'SettingsController@updateShippingMethod')->name('update.shipping');
        });

        Route::group(['prefix' => 'profile'], function (){
            Route::get('edit', 'ProfileController@edit')->name('edit.profile');
            Route::put('update', 'ProfileController@update')->name('update.profile');
        });

    });

    Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function(){
        Route::get('/login','LoginController@login')->name('admin.login.page');
        Route::post('/check-login','LoginController@checkLogin')->name('check.admin.login');
    });
});

