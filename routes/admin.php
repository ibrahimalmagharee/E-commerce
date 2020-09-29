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

        ######################### Settings Routes #############################################################
        Route::group(['prefix' => 'settings'], function (){
            Route::get('shipping-method/{type}', 'SettingsController@editShippingMethod')->name('edit.shipping');
            Route::put('shipping-method/{id}', 'SettingsController@updateShippingMethod')->name('update.shipping');
        });

        ######################### End Settings Routes #############################################################

        ######################### Profile Routes #############################################################

        Route::group(['prefix' => 'profile'], function (){
            Route::get('edit', 'ProfileController@edit')->name('edit.profile');
            Route::put('update', 'ProfileController@update')->name('update.profile');
        });

        ######################### End Profile Routes #############################################################

        ##################  Category Routes #############################################################

        Route::group(['prefix' => 'category'], function (){
            Route::get('/show-category', 'CategoriesController@index')->name('index.categories');
            Route::post('save', 'CategoriesController@store')->name('save.category');
            Route::get('edit/{id}', 'CategoriesController@edit')->name('edit.category');
            Route::post('update/{id}', 'CategoriesController@update')->name('update.category');
            Route::get('delete/{id}', 'CategoriesController@destroy')->name('delete.category');
        });
        ######################### End Category Routes #############################################################

        ################## Brand Routes #############################################################

        Route::group(['prefix' => 'brand'], function (){
            Route::get('/show-brand', 'BrandController@index')->name('index.brand');
            Route::post('save-brand', 'BrandController@store')->name('save.brand');
            Route::get('edit-brand/{id}', 'BrandController@edit')->name('edit.brand');
            Route::post('update-brand/{id}', 'BrandController@update')->name('update.brand');
            Route::get('delete-brand/{id}', 'BrandController@destroy')->name('delete.brand');
        });
        ######################### End Brand Routes #############################################################

        ################## Tag Routes #############################################################

        Route::group(['prefix' => 'tag'], function (){
            Route::get('/show-tag', 'TagController@index')->name('index.tag');
            Route::post('save-tag', 'TagController@store')->name('save.tag');
            Route::get('edit-tag/{id}', 'TagController@edit')->name('edit.tag');
            Route::post('update-tag/{id}', 'TagController@update')->name('update.tag');
            Route::get('delete-tag/{id}', 'TagController@destroy')->name('delete.tag');
        });
        ######################### End Tag Routes #############################################################

    });

    Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function(){
        Route::get('/login','LoginController@login')->name('admin.login.page');
        Route::post('/check-login','LoginController@checkLogin')->name('check.admin.login');
    });
});

