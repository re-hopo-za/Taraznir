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
        Cache::tags(['catalog'])->flush();
    }

    /**
     * Handle the catalog "updated" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function updated(catalog $catalog)
    {
        Cache::tags(['catalog'])->flush();
    }

    /**
     * Handle the catalog "deleted" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function deleted(catalog $catalog)
    {
        Cache::tags(['catalog'])->flush();
    }

    /**
     * Handle the catalog "restored" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function restored(catalog $catalog)
    {
        Cache::tags(['catalog'])->flush();
    }

    /**
     * Handle the catalog "force deleted" event.
     *
     * @param  \App\Models\catalog  $catalog
     * @return void
     */
    public function forceDeleted(catalog $catalog)
    {
        Cache::tags(['catalog'])->flush();
    }
}
