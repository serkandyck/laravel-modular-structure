<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Account\Entities\User;
use Modules\MobileApp\Entities\MobileApp;
use Modules\Account\Observers\UserObserver;
use Modules\MobileApp\Observers\MobileAppObserver;

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
        User::observe(UserObserver::class);
        MobileApp::observe(MobileAppObserver::class);
    }
}
