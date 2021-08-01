<?php

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
Route::group(['namespace' => 'Forsa', 'middleware' =>'auth:vendor', 'prefix' => 'forsa'], function (){
    Route::post('/payment','VendorController@payment')->name('forsa.payment');
    Route::post('logout-vendor','VendorController@logout')->name('vendor.logout');

});

Route::group(['namespace' => 'Forsa', 'prefix' => 'forsa'], function(){
    Route::post('/contact','VendorController@contact')->name('forsa.contact');

    Route::get('/','VendorController@index')->name('forsa.index');
    Route::get('/subscription','VendorController@subscription')->name('forsa.subscription');

    Route::get('/sign-up','VendorController@signUp')->name('vendor.signUp.page');
    Route::post('/sign-up-vendor','VendorController@signUpVendor')->name('vendor.signUp');
    Route::get('/sign-in','VendorController@signIn')->name('vendor.signIn.page');
    Route::post('/check-sign-in-vendor','VendorController@checkSignInVendor')->name('check.vendor.signIn');

//    Route::get('/password/reset','VendorForgotPasswordController@showLinkRequestForm')->name('vendor.password.request');
//    Route::get('/password/reset/{token}','VendorRestPasswordController@showResetForm')->name('vendor.password.reset');
//    Route::post('/password/email','VendorForgotPasswordController@sendResetLinkEmail')->name('vendor.password.email');
//    Route::post('/password/reset','VendorRestPasswordController@reset')->name('vendor.password.update');

});
