f<?php

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
Route::get('/dashboard', function () {
    return view('dashboard');
});
// pickupform from signed in user
Route::get('/pickupform', 'OrderController@index');
Route::post('/pickupform', 'OrderController@create')->middleware('auth');

Route::middleware(['auth', 'auth.customer'])->prefix('customers')->namespace('customer')->group(function () {
    Route::resource('orders', 'OrderController');
});

Auth::routes();

Route::middleware(["auth", "auth.rider.admin"])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
