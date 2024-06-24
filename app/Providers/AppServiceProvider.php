<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use Lunar\Admin\Filament\Resources\ActivityResource;
use Lunar\Admin\Support\Facades\LunarPanel;


class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        LunarPanel::register()->extensions([
            ActivityResource::class => ActivityResource::class,
        ]);
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
