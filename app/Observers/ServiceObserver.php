<?php

namespace App\Observers;

use App\Models\service;
use Illuminate\Support\Facades\Cache;

class ServiceObserver
{
    /**
     * Handle the service "created" event.
     *
     * @param  \App\Models\service  $service
     * @return void
     */
    public function created(service $service)
    {
        redisRemover('services:*');
    }

    /**
     * Handle the service "updated" event.
     *
     * @param  \App\Models\service  $service
     * @return void
     */
    public function updated(service $service)
    {
        redisRemover('services:*');
    }

    /**
     * Handle the service "deleted" event.
     *
     * @param  \App\Models\service  $service
     * @return void
     */
    public function deleted(service $service)
    {
        redisRemover('services:*');
    }

    /**
     * Handle the service "restored" event.
     *
     * @param  \App\Models\service  $service
     * @return void
     */
    public function restored(service $service)
    {
        redisRemover('services:*');
    }

    /**
     * Handle the service "force deleted" event.
     *
     * @param  \App\Models\service  $service
     * @return void
     */
    public function forceDeleted(service $service)
    {
        redisRemover('services:*');
    }
}
