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
    Route::group(['namespace' => 'Admin', 'middleware' =>'auth:superAdmin', 'prefix' => 'super-admin'], function (){

        Route::get('index','DashboardController@index')->name('superAdmin.dashboard');
        Route::get('logout','LoginController@logout')->name('superAdmin.logout');



        ######################### Profile Routes #############################################################

        Route::group(['prefix' => 'profile'], function (){
            Route::get('edit', 'ProfileController@edit')->name('superAdmin.edit.profile');
            Route::put('update', 'ProfileController@update')->name('superAdmin.update.profile');
        });

        ######################### End Profile Routes #############################################################


        ################## Brand Routes #############################################################

        Route::group(['prefix' => 'brand'], function (){
            Route::get('/show-brand', 'BrandController@index')->name('index.brand');
            Route::post('save-brand', 'BrandController@store')->name('save.brand');
            Route::get('edit-brand/{id}', 'BrandController@edit')->name('edit.brand');
            Route::post('update-brand/{id}', 'BrandController@update')->name('update.brand');
            Route::get('delete-brand/{id}', 'BrandController@destroy')->name('delete.brand');
        });
        ######################### End Brand Routes #############################################################

    });

    Route::group(['namespace' => 'SuperAdmin', 'middleware' => 'guest:superAdmin', 'prefix' => 'super-admin'], function(){
        Route::get('/login','LoginController@login')->name('superAdmin.login.page');
        Route::post('/check-login','LoginController@checkLogin')->name('check.superAdmin.login');
    });
});

