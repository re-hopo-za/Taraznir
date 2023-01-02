<?php

namespace App\Observers;

use App\Models\project;

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
        redisRemover('projects');
    }

    /**
     * Handle the project "updated" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function updated(project $project)
    {
        redisRemover('projects');
    }

    /**
     * Handle the project "deleted" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function deleted(project $project)
    {
        redisRemover('projects');
    }

    /**
     * Handle the project "restored" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function restored(project $project)
    {
        redisRemover('projects');
    }

    /**
     * Handle the project "force deleted" event.
     *
     * @param  \App\Models\project  $project
     * @return void
     */
    public function forceDeleted(project $project)
    {
        redisRemover('projects');
    }
}
