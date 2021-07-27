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

        ##################  Slider Routes #############################################################

        Route::group(['prefix' => 'slider'], function (){
            Route::get('/show-slider', 'SliderController@index')->name('index.sliders');
            Route::post('save', 'SliderController@saveImagesOfSliderInDB')->name('save.slider');
            Route::get('edit/{id}', 'SliderController@edit')->name('edit.slider');
            Route::post('update/{id}', 'SliderController@update')->name('update.slider');
            Route::get('delete/{id}', 'SliderController@destroy')->name('delete.slider');

            Route::post('save-images-slider-inFolder', 'SliderController@saveImagesOfSliderInFolder')->name('save.images.slider.inFolder');
            Route::get('delete-image-slider', 'SliderController@deleteImagesOfSlider')->name('delete.slider.image');
        });
        ######################### End Slider Routes #############################################################

        ##################  Banner Routes #############################################################

        Route::group(['prefix' => 'banners'], function (){
            Route::get('/show-banners', 'BannerController@index')->name('index.banners');
            Route::post('save', 'BannerController@save')->name('save.banner');
            Route::get('edit/{id}', 'BannerController@edit')->name('edit.banner');
            Route::post('update/{id}', 'BannerController@update')->name('update.banner');
            Route::get('delete/{id}', 'BannerController@destroy')->name('delete.banner');

            Route::post('save-images-banner-inFolder', 'BannerController@saveImagesOfBannerInFolder')->name('save.images.banner.inFolder');
            Route::get('delete-image-banner', 'BannerController@deleteImagesOfBanner')->name('delete.banner.image');
        });
        ######################### End Banner Routes #############################################################

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


        ################## Products Routes #############################################################

        Route::group(['prefix' => 'product'], function (){
            Route::get('/show-products', 'ProductController@index')->name('index.product');
            Route::get('create-product', 'ProductController@create')->name('create.product');
            Route::post('save-product-general', 'ProductController@store')->name('save.product.general');
            Route::get('delete-product/{id}', 'ProductController@destroy')->name('delete.product');

            ##################### Product Images ######################################
            Route::get('add-product-images/{product_id}', 'ProductController@addProductImages')->name('add.product.images');
            Route::post('save-images-inFolder', 'ProductController@saveImagesOfProductInFolder')->name('save.images.inFolder');
            Route::post('save-images-inDB', 'ProductController@saveImagesOfProductInDB')->name('save.images.inDB');
            Route::get('delete-image/{id}', 'ProductController@deleteImagesOfProduct')->name('delete.image');
            Route::post('remove-image', 'ProductController@removeImagesOfProductFromFolder')->name('delete.image.fromFolder');
            ##################### Product Images ######################################


            ##################### Product Edit ######################################
            Route::get('edit-product-general/{product_id}', 'ProductController@editProductGeneral')->name('edit.product.general');
            Route::post('update-product-general/{product_id}', 'ProductController@updateProductGeneral')->name('update.product.general');
            Route::get('edit-product-price/{product_id}', 'ProductController@editProductPrice')->name('edit.product.price');
            Route::post('update-product-price/{product_id}', 'ProductController@updateProductPrice')->name('update.product.price');
            Route::get('edit-product-store/{product_id}', 'ProductController@editProductStore')->name('edit.product.store');
            Route::post('update-product-store/{product_id}', 'ProductController@updateProductStore')->name('update.product.store');
            Route::get('edit-product-activation/{product_id}', 'ProductController@editProductActivation')->name('edit.product.activation');
            Route::post('update-product-activation/{product_id}', 'ProductController@updateProductActivation')->name('update.product.activation');
            ##################### Product Edit ######################################


            ##################### Product Attributes ######################################
            Route::group(['prefix' => 'attribute'], function (){
                Route::get('/show-attribute', 'AttributesController@index')->name('index.attribute');
                Route::post('save-attribute', 'AttributesController@store')->name('save.attribute');
                Route::get('edit-attribute/{id}', 'AttributesController@edit')->name('edit.attribute');
                Route::post('update-attribute/{id}', 'AttributesController@update')->name('update.attribute');
                Route::get('delete-attribute/{id}', 'AttributesController@destroy')->name('delete.attribute');

                ##################### Product Attributes Options ######################################

                Route::group(['prefix' => 'option'], function (){
                    Route::get('/show-option/{product_id}', 'OptionController@index')->name('index.option');
                    Route::post('save-option', 'OptionController@store')->name('save.option');
                    Route::get('edit-option/{option_id}', 'OptionController@edit')->name('edit.option');
                    Route::post('update-option/{option_id}', 'OptionController@update')->name('update.option');
                    Route::get('delete-option/{id}', 'OptionController@destroy')->name('delete.option');
                });

                ##################### Product Attributes Options ######################################



            });
            ##################### Product Attributes ######################################
        });
        ######################### End Products Routes ###########################################################
    });

    Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function(){
        Route::get('/login','LoginController@login')->name('admin.login.page');
        Route::post('/check-login','LoginController@checkLogin')->name('check.admin.login');
    });
});

