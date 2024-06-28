<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use Lunar\Admin\Support\Facades\LunarPanel;
use RyanChandler\FilamentNavigation\FilamentNavigation;


class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        LunarPanel::register()
            ->getPanel()
            ->plugin(FilamentNavigation::make())
            ->font(
                'AzarMehr',
                url: asset('css/fonts.min.css'),
            );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return true;
        });
    }
}
