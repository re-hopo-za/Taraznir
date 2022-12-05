<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'پست ها' ,
                'دسته بندی'  ,
                'دیگر'  ,
                'تنظیمات' ,
            ]);
        });

        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
