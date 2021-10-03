<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{slug}', 'DetailController@index')->name('detail');

Route::middleware(['auth', 'verified'])->group(function () {
   Route::get('/checkout/{id}', 'CheckoutController@index')->name('checkout');
   Route::post('/checkout/{id}', 'CheckoutController@process')->name('checkout_process');
   Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')->name('checkout-create');
   Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')->name('checkout-remove');
   Route::get('/checkout/confirm/{id}', 'CheckoutController@success')->name('checkout-success');
});

// Routing for Administrator
Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'administrator'])->group(function () {
   Route::get('/', 'DashboardController@index')->name('dashboard');
   Route::resource('gallery', 'GalleryController');
   Route::resource('travel-package', 'TravelPackageController');
   Route::resource('transaction', 'TransactionController');
   // Route::resource('transaction-detail', 'TransactionDetailController');
});
Auth::routes(['verify' => true]);
