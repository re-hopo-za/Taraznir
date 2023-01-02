<?php

namespace App\Observers;

use App\Models\standard;

class StandardObserver
{
    /**
     * Handle the standard "created" event.
     *
     * @param  \App\Models\standard  $standard
     * @return void
     */
    public function created(standard $standard)
    {
        redisRemover('standards');
    }

    /**
     * Handle the standard "updated" event.
     *
     * @param  \App\Models\standard  $standard
     * @return void
     */
    public function updated(standard $standard)
    {
        redisRemover('standards');
    }

    /**
     * Handle the standard "deleted" event.
     *
     * @param  \App\Models\standard  $standard
     * @return void
     */
    public function deleted(standard $standard)
    {
        redisRemover('standards');
    }

    /**
     * Handle the standard "restored" event.
     *
     * @param  \App\Models\standard  $standard
     * @return void
     */
    public function restored(standard $standard)
    {
        redisRemover('standards');
    }


    /**
     * Handle the standard "force deleted" event.
     *
     * @param  \App\Models\standard  $standard
     * @return void
     */
    public function forceDeleted(standard $standard)
    {
        redisRemover('standards');
    }
}
