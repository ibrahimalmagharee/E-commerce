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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


    Route::group(['namespace' => 'Site'/*, 'middleware' => 'guest'*/], function () {
        //guest  user
        route::get('/', 'HomeController@index')->name('home');//->middleware('VerifiedUser');
        route::get('category/{slug}', 'CategoryProductsController@productsBySlug')->name('category');
        route::get('product/{slug}', 'ProductController@productsBySlug')->name('product.details');
        Route::get('wishlist/products', 'WishlistController@index')->name('wishlist.products.index');
        Route::get('/cart', 'CartController@index')->name('cart.products.index');
        Route::get('/profile', 'ProfileController@edit')->name('profile');
        Route::get('/search', 'HomeController@search')->name('search');


        /**
         *  Cart routes
         */
    });




    Route::group(['namespace' => 'Site', 'middleware' => 'auth:customer'], function () {
        // must be authenticated user

        Route::group(['prefix' => 'profile'], function (){
            Route::post('update', 'ProfileController@update')->name('customer.update.profile');
        });

        Route::post('verify-user/', 'VerificationCodeController@verify')->name('verify-user');
        Route::get('verify', 'VerificationCodeController@getVerifyPage')->name('get.verification.form');
        Route::get('products/{productId}/reviews', 'ProductReviewController@index')->name('products.reviews.index');
        Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');
        Route::get('payment/{amount}', 'PaymentController@getPayments') -> name('payment');
        Route::post('payment', 'PaymentController@processPayment') -> name('payment.process');
        Route::post('logout','RegisterationController@logout')->name('customer.logout');


    });



Route::group(['namespace' => 'Site', 'middleware' => 'auth:customer'], function () {
    Route::post('save-product-wishlist', 'WishlistController@store')->name('wishlist.store');
    Route::delete('wishlist', 'WishlistController@destroy')->name('wishlist.destroy');

    Route::post('save-product','CartController@saveProduct')->name('customer.saveProduct');
    Route::post('update-product-quantity', 'CartController@updateQuantity')->name('Product.update.quantity');
    Route::delete('delete-product-cart', 'CartController@destroy')->name('Product.destroy');
});

Route::group(['namespace' => 'Site', 'middleware' => 'guest:customer'], function(){
    Route::get('/register','RegisterationController@register')->name('customer.register.page');
    Route::post('/register-customer','RegisterationController@registerCustomer')->name('customer.register');
    Route::get('/login','RegisterationController@login')->name('customer.login.page');
    Route::post('/check-login-customer','RegisterationController@checkLoginCustomer')->name('check.customer.login');

    Route::get('/password/reset','CustomerForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
    Route::get('/password/reset/{token}','CustomerRestPasswordController@showResetForm')->name('customer.password.reset');
    Route::post('/password/email','CustomerForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
    Route::post('/password/reset','CustomerRestPasswordController@reset')->name('customer.password.update');



});
});
