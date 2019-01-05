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

/*
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



Route::middleware(["auth", "auth.rider.admin"])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('orders', 'OrderController');

Route::resource('permissions', 'PermissionController');*/


Auth::routes();

// User Module
Route::prefix('users')->name('users.')->namespace('User')->group(function () {

    // Administrators sub module
    Route::prefix('administrators')->middleware(['auth', 'auth.admin'])->name('administrators.')->group(function () {
        Route::get('', 'AdministratorController@index')->name('index');
        Route::get('create', 'AdministratorController@create')->name('create');
        Route::post('', 'AdministratorController@store')->name('store');
        Route::get('{id}', 'AdministratorController@show')->name('show');
        Route::get('{id}/edit', 'AdministratorController@edit')->name('edit');
        Route::put('{id}', 'AdministratorController@update')->name('update');
        Route::delete('{id}', 'AdministratorController@destroy')->name('destroy');
    });

    // Customer sub module
    Route::prefix('customers')->name('customers.')->group(function () {
        Route::middleware(['auth', 'auth.admin'])->group(function () {
            Route::get('', 'CustomerController@index')->name('index');
            Route::get('{id}', 'CustomerController@show')->name('show');
        });

        Route::middleware('guest')->group(function () {
            Route::get('create', 'CustomerController@create')->name('create');
            Route::post('', 'CustomerController@store')->name('store');
        });

        Route::middleware(['auth', 'auth.customer'])->group(function () {
            Route::get('my-profile', 'CustomerController@myProfile')->name('myProfile');
            Route::get('edit', 'CustomerController@edit')->name('edit');
            Route::put('', 'CustomerController@update')->name('update');
        });
    });

    // Rider sub module
    Route::prefix('riders')->middleware(['auth', 'auth.admin'])->name('riders.')->group(function () {
       Route::get('', 'RiderController@index')->name('index');
       Route::get('create', 'RiderController@create')->name('create');
       Route::post('', 'RiderController@store')->name('store');
       Route::get('{id}', 'RiderController@show')->name('show');
       Route::get('{id}/edit', 'RiderController@edit')->name('edit');
       Route::put('{id}', 'RiderController@update')->name('update');
       Route::delete('{id}', 'RiderController@destroy')->name('destroy');
    });
});


// Administrator Module
Route::prefix('administrators')->name('administrators.')->namespace('Administrator')->group(function () {

});


// customer Module
Route::prefix('customers')->middleware('auth')->name('customers.')->namespace('Customer')->group(function () {

    // Order sub module
    Route::prefix('orders')->middleware('auth.admin')->name('orders.')->group(function () {
        Route::get('{id}/orders', 'OrderController@index')->name('index');
    });

    Route::prefix('orders')->name('orders.')->group(function () {
        Route::middleware('auth.customer')->group(function () {
            Route::get('', 'OrderController@index2')->name('index2');
            Route::get('create', 'OrderController@create')->name('create');
            Route::post('', 'OrderController@store')->name('store');
            Route::get('{order}/edit', 'OrderController@edit')->name('edit');
            Route::put('{order}', 'OrderController@update')->name('update');
            Route::put('{order}/cancel', 'OrderController@cancel')->name('cancel');
        });

        Route::middleware('auth.admin.customer')->group(function () {
            Route::get('{id}', 'OrderController@show')->name('show');
        });

    });
});


// Rider Module
Route::prefix('riders')->name('riders.')->namespace('Rider')->middleware('auth')->group(function () {

    // Order sub module
    Route::middleware('auth.admin')->group(function () {
        Route::get('{id}/orders', 'OrderController@index')->name('orders.index');
        Route::put('orders/{order}/assign', 'OrderController@assign')->name('orders.assign');
    });

    Route::prefix('orders')->middleware('auth.rider')->name('orders.')->group(function () {
        Route::get('', 'OrderController@index2')->name('index2');
        Route::get('{order}/edit', 'OrderController@edit')->name('edit');
        Route::put('{order}', 'OrderController@update')->name('update');
    });

});


// Order Module
Route::prefix('orders')->middleware('auth')->name('orders.')->namespace('Order')->group(function () {

    // Order Activity sub module
    Route::name('activities.')->group(function () {
        Route::prefix('{id}/activities')->group(function () {
            Route::get('', 'ActivityController@index')->name('index')->middleware('auth.admin.customer');

            Route::middleware('auth.admin')->group(function () {
                Route::get('create', 'ActivityController@create')->name('create');
                Route::post('', 'ActivityController@store')->name('store');
            });
        });

        Route::prefix('activities/{id}')->middleware('auth.admin')->group(function () {
            Route::get('edit', 'ActivityController@edit')->name('edit');
            Route::put('', 'ActivityController@update')->name('update');
        });
    });


    // Tracking sub module
    Route::get('tracker', 'TrackingController@show')->name('tracking.show');
});