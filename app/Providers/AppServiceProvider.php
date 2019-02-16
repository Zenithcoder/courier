<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Lga;
use App\State;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('*', function($view){
            $local= Lga::all();

            $view->with(compact('local'));
        });
        View()->composer('*', function($view){
            $states= State::all();

            $view->with(compact('states'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
