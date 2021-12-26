<?php

namespace App\Providers;

//observers
use App\Observers\RestaurantObserver;
use App\Observers\KitchenObserver;
//observers end

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
//Models
use App\Models\Kitchen;
use App\Models\Address;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->roles()->where('role_id', 1)->first() != null;
        });

        Blade::if('user', function () {
            return auth()->check() && auth()->user()->roles()->where('role_id', 2)->first() != null;
        });

        Kitchen::observe(KitchenObserver::class);
        Address::observe(RestaurantObserver::class);
    }
}
