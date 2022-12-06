<?php

namespace App\Observers;

use App\Models\project;
use Illuminate\Support\Facades\Cache;

class ProjectObserver
{
    /**
     * Handle the project "created" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function created(project $project)
    {
        Cache::tags(['project'])->flush();
    }

    /**
     * Handle the project "updated" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function updated(project $project)
    {
        Cache::tags(['project'])->flush();
    }

    /**
     * Handle the project "deleted" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function deleted(project $project)
    {
        Cache::tags(['project'])->flush();
    }

    /**
     * Handle the project "restored" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function restored(project $project)
    {
        Cache::tags(['project'])->flush();
    }

    /**
     * Handle the project "force deleted" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function forceDeleted(project $project)
    {
        Cache::tags(['project'])->flush();
    }
}
