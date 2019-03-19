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


Route::get('/', function () {return view('index');});
Route::get('/about-us', function () {return view('about-us');});
Route::get('/tracking', function () {return view('tracking');});
Route::get('/pricing', function () {return view('pricing');});
Route::get('/contact', function () {return view('contact');});
Route::post('contactUsPost', 'UserController@contactUsPost')->name('contactuspost');

Route::get('cost-calculator', 'UserController@create')->name('cost.calculator');
Route::post('cost-calculatorP', 'UserController@createP')->name('cost.calculatorP');



Auth::routes();

Route::get("logout", "Auth\LoginController@logout")->name("logout");

Route::get("dashboard", "DashboardController@index")->name("dashboard.index")->middleware("auth");

// User Module 
Route::prefix('users')->name('users.')->namespace('User')->group(function () {

    // Administrators sub module
    Route::prefix('administrators')->middleware(['auth', 'auth.admin'])->name('administrators.')->group(function () {
        Route::get('', 'AdministratorController@index')->name('index');
        Route::get('create', 'AdministratorController@create')->name('create');
        Route::post('store', 'AdministratorController@store')->name('store');
        Route::get('{id}', 'AdministratorController@show')->name('show');
        Route::get('{id}/edit', 'AdministratorController@edit')->name('edit');
        Route::put('{user}', 'AdministratorController@update')->name('update');
        Route::delete('{id}', 'AdministratorController@destroy')->name('destroy');
    });

    // Customer sub module
    Route::prefix('customers')->name('customers.')->group(function () {
        Route::middleware(['auth', 'auth.customer'])->group(function () {
            Route::get('my-profile', 'CustomerController@myProfile')->name('myProfile');
            Route::get('edit', 'CustomerController@edit')->name('edit');
            Route::put('', 'CustomerController@update')->name('update');
        });

        Route::middleware(['auth', 'auth.admin'])->group(function () {
            Route::get('', 'CustomerController@index')->name('index');
            Route::get('{id}', 'CustomerController@show')->name('show');
        });

        Route::middleware('guest')->group(function () {
            Route::get('create', 'CustomerController@create')->name('create');
            Route::post('', 'CustomerController@store')->name('store');

        });
    });

    // Rider sub module
    Route::prefix('riders')->middleware(['auth', 'auth.admin'])->name('riders.')->group(function () {
        Route::get('', 'RiderController@index')->name('index');
        Route::get('create', 'RiderController@create')->name('create');
        Route::post('store', 'RiderController@store')->name('store');
        Route::get('{id}', 'RiderController@show')->name('show');
        Route::get('{id}/edit', 'RiderController@edit')->name('edit');
        Route::put('{user}', 'RiderController@update')->name('update');
        Route::delete('{id}', 'RiderController@destroy')->name('destroy');
    });
});

// Administrator Module     
Route::prefix('administrators')->name('administrators.')->namespace('Administrator')->group(function () {

    // Order sub module
    Route::prefix('orders')->middleware('auth.admin')->name('orders.')->group(function () {
        Route::get('', 'AdministratorController@index')->name('index');
         Route::get('index2', 'AdministratorController@index2')->name('index2');
         Route::get('dashboard', 'AdministratorController@dashboard')->name('dashboard');
    });

});

// customer Module
Route::prefix('customers')->middleware('auth')->name('customers.')->namespace('Customer')->group(function () {

    // Dashboard
//    Route::get('dashboard', 'DashboardController@index')->middleware('auth.customer')->name('dashboard.index'); 

    // Order sub module
    Route::prefix('{id}/orders')->middleware('auth.admin')->name('orders.')->group(function () {
        Route::get('', 'OrderController@index')->name('index');
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
    Route::middleware('auth.admin')->name("orders.")->group(function () {
        Route::get('{id}/orders', 'OrderController@index')->name("index");
        Route::put('orders/{order}/assign', 'OrderController@assign')->name("assign");
    });


    Route::prefix('orders')->middleware('auth.rider')->name('orders.')->group(function () {
        Route::get('', 'OrderController@lists')->name('lists');
        Route::get('dash', 'OrderController@index3')->name('index3');
        Route::get('{order}/edit', 'OrderController@edit')->name('edit');
        Route::post('{order}', 'OrderController@update')->name('update');
        Route::get('{order}', 'OrderController@show')->name('show');
        Route::get('create', 'OrderController@createxs')->name('create');
    });

});

//Order Module
Route::prefix('orders')->name('orders.')->namespace('Order')->group(function () {

    // Authenticated routes
    Route::middleware('auth')->group(function () {

        Route::get("", "OrderController@index")->name("index")->middleware('auth.admin');
        Route::get("{order}", "OrderController@show")->name("show");

        // Activities sub module
        Route::middleware('auth.admin.customer')->group(function () {
            Route::get('{id}/activities', 'ActivityController@index')->name('activity.index');
        });

        Route::middleware('auth.rider')->group(function () {
            Route::get('{id}/activities/create', 'ActivityController@create')->name('activity.create');
            Route::post('activities', 'ActivityController@store')->name('activity.store');
            Route::get('activities/{id}/edit', 'ActivityController@edit')->name('activity.edit');
            Route::put('activities/{id}', 'ActivityController@update')->name('activity.update');
        });
    });

    // Tracking sub module
    Route::get('tracker', 'TrackingController@search')->name('tracking.search');
});




Route::get("/blank", function () {
    return view("modified.admin.blank");
});