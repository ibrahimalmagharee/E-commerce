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
    Route::group(['namespace' => 'SuperAdmin', 'middleware' =>'auth:superAdmin', 'prefix' => 'super-admin'], function (){

        Route::get('indexs','DashboardController@index')->name('superAdmin.dashboard');
        Route::get('contacts','ContactVendorController@index')->name('superAdmin.contacts');
        Route::get('/contact-us/delete/{id}', 'ContactVendorController@destroyContactUs')->name('delete.contactUs.vendor');
        Route::get('logout','LoginController@logout')->name('superAdmin.logout');



        ######################### Profile Routes #############################################################

        Route::group(['prefix' => 'profile'], function (){
            Route::get('edit-profile', 'ProfileController@edit')->name('superAdmin.edit.profile');
            Route::put('update-profile', 'ProfileController@update')->name('superAdmin.update.profile');
        });

        ######################### End Profile Routes #############################################################


        ################## Vendor Routes #############################################################

        Route::group(['prefix' => 'vendor'], function (){
            Route::get('/show-vendor', 'VendorController@index')->name('index.vendors');
            Route::post('save-vendor', 'VendorController@store')->name('save.vendor');
            Route::get('edit-vendor/{id}', 'VendorController@edit')->name('edit.vendor');
            Route::post('update-vendor/{id}', 'VendorController@update')->name('update.vendor');
            Route::get('delete-vendor/{id}', 'VendorController@destroy')->name('delete.vendor');
        });
        ######################### End Brand Routes #############################################################

    });

    Route::group(['namespace' => 'SuperAdmin', 'middleware' => 'guest:superAdmin', 'prefix' => 'super-admin'], function(){
        Route::get('/login-super-admin','LoginController@login')->name('superAdmin.login.page');
        Route::post('/login-check-super-admin','LoginController@checkLogin')->name('check.superAdmin.login');
    });
});

