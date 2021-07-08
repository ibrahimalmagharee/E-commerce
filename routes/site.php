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
        route::get('category/{slug}', 'CategoryController@productsBySlug')->name('category');
        route::get('product/{slug}', 'ProductController@productsBySlug')->name('product.details');

        /**
         *  Cart routes
         */
        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'CartController@getIndex')->name('site.cart.index');
            Route::post('/cart/add/{slug?}', 'CartController@postAdd')->name('site.cart.add');
            Route::post('/update/{slug}', 'CartController@postUpdate')->name('site.cart.update');
            Route::post('/update-all', 'CartController@postUpdateAll')->name('site.cart.update-all');
        });
    });


    Route::group(['namespace' => 'Site', 'middleware' => ['auth', 'VerifiedUser']], function () {
        // must be authenticated user and verified
        Route::get('profile', function () {
            return 'You Are Authenticated ';
        });
    });

    Route::group(['namespace' => 'Site', 'middleware' => 'auth:customer'], function () {
        // must be authenticated user
        Route::post('verify-user/', 'VerificationCodeController@verify')->name('verify-user');
        Route::get('verify', 'VerificationCodeController@getVerifyPage')->name('get.verification.form');
        Route::get('products/{productId}/reviews', 'ProductReviewController@index')->name('products.reviews.index');
        Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');
        Route::get('payment/{amount}', 'PaymentController@getPayments') -> name('payment');
        Route::post('payment', 'PaymentController@processPayment') -> name('payment.process');
        Route::post('logout','RegisterationController@logout')->name('customer.logout');


    });



Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {
    Route::post('wishlist', 'WishlistController@store')->name('wishlist.store');
    Route::delete('wishlist', 'WishlistController@destroy')->name('wishlist.destroy');
    Route::get('wishlist/products', 'WishlistController@index')->name('wishlist.products.index');
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
