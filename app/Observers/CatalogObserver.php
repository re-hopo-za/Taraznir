<?php

namespace App\Observers;

use App\Models\catalog;
use Illuminate\Support\Facades\Cache;

class CatalogObserver
{
    /**
     * Handle the catalog "created" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function created(catalog $catalog)
    {
        redisRemover('catalogs:*');
    }

    /**
     * Handle the catalog "updated" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function updated(catalog $catalog)
    {
        redisRemover('catalogs:*');
    }

    /**
     * Handle the catalog "deleted" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function deleted(catalog $catalog)
    {
        redisRemover('catalogs:*');
    }

    /**
     * Handle the catalog "restored" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function restored(catalog $catalog)
    {
        redisRemover('catalogs:*');
    }

    /**
     * Handle the catalog "force deleted" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function forceDeleted(catalog $catalog)
    {
        redisRemover('catalogs:*');
    }
}
