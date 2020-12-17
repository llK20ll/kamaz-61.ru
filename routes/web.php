<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/loguot', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');

Route::middleware(['auth'])->group(function(){
    Route::group([
        'prefix' => 'person',
        'namespace' => 'App\Http\Controllers\Person',
        'as' => 'person.',
    ], function () {
        Route::get('/orders', 'OrderController@index')->name('orders.index');            
        Route::get('/orders/{order}', 'OrderController@show')->name('orders.show'); 
    });
    Route::group([
        'namespace' => 'App\Http\Controllers\Admin',
        'prefix' => 'admin',
        ], function () {
            Route::group(['middleware' => 'is_admin'], function () {
                Route::get('/orders', 'OrderController@index')->name('home');            
                Route::get('/orders/{order}', 'OrderController@show')->name('orders.show'); 
                Route::delete('/orders/delete/{order}', 'OrderController@destroy')->name('orderDelete');           
            });  
            Route::resource('products', 'ProductController');
            Route::resource('categories', 'CategoryController');   
            Route::resource('news', 'NewsController');      
    });
});




Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');


Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/leasing','App\Http\Controllers\MainController@leasing')->name('leasing');

Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');

Route::get('/service','App\Http\Controllers\MainController@service')->name('service');
Route::get('/contacts','App\Http\Controllers\MainController@contacts')->name('contacts');
Route::get('/privacy','App\Http\Controllers\MainController@privacy')->name('privacy');
Route::get('/parts','App\Http\Controllers\MainController@parts')->name('parts');
Route::get('/parts/{parts_code}','App\Http\Controllers\MainController@partsview')->name('partsview');
Route::get('/news', 'App\Http\Controllers\MainController@news')->name('news');

Route::post('/contact/submit','App\Http\Controllers\MailController@contact')->name('contact-form');

Route::group(['prefix' => 'basket',], function () {
    Route::post('/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');

    Route::group([
        'middleware' => 'basket_not_empty',
        
    ], function () {
        Route::get('/', 'App\Http\Controllers\BasketController@basket')->name('basket');
        Route::get('/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
        Route::post('/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
        Route::post('/place', 'App\Http\Controllers\BasketController@basketConfirm')->name('basket-confirm');        
    });
});

Route::get('/{category}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product}', 'App\Http\Controllers\MainController@product')->name('product');







