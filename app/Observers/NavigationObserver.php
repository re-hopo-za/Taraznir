<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use RyanChandler\FilamentNavigation\Models\Navigation;

class NavigationObserver
{
    /**
     * Handle the Navigation "created" event.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return void
     */
    public function created(Navigation $navigation)
    {
        redisRemover('navigations:');
    }

    /**
     * Handle the Navigation "updated" event.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return void
     */
    public function updated(Navigation $navigation)
    {
        redisRemover('navigations:');
    }

    /**
     * Handle the Navigation "deleted" event.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return void
     */
    public function deleted(Navigation $navigation)
    {
        redisRemover('navigations:');
    }

    /**
     * Handle the Navigation "restored" event.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return void
     */
    public function restored(Navigation $navigation)
    {
        redisRemover('navigations:');
    }

    /**
     * Handle the Navigation "force deleted" event.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return void
     */
    public function forceDeleted(Navigation $navigation)
    {
        redisRemover('navigations:');
    }
}
