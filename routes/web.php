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

Route::get('/', function () {
    return view('index');
});

// where the user is redirected to after login or request for pickup


Route::get('/users/orders/search/', 'Customer\OrderController@search')->name('user.order.search');
Route::get('/dashboard', 'Customer\OrderController@index')->middleware('auth');

Route::get('/order_tracking', 'Customer\OrderActivityController@index')->middleware('auth');
Route::get('/orders_tracking/{order_activity}', 'Customer\OrderActivityController@show')->middleware('auth');

// pickupform from signed in user
Route::get('/pickupform', 'Customer\OrderController@pickup');
Route::post('/pickupform', 'Customer\OrderController@create')->middleware('auth');


// user module
Route::prefix('user')->namespace('user')->group(function () {

});


// customer module
Route::prefix('customers')->namespace('customer')->group(function () {
    Route::middleware(['auth', 'auth.customer'])->group(function () {
        Route::resource('orders', 'OrderController');
    });
});

Auth::routes();

Route::middleware(["auth", "auth.rider.admin"])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('orders', 'OrderController');

Route::resource('permissions', 'PermissionController');
