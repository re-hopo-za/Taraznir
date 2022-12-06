<?php

namespace App\Observers;

use App\Models\blog;
use Illuminate\Support\Facades\Cache;

class BlogObserver
{
    /**
     * Handle the blog "created" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function created(blog $blog)
    {
        Cache::tags(['blog'])->flush();
    }

    /**
     * Handle the blog "updated" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function updated(blog $blog)
    {
        Cache::tags(['blog'])->flush();
    }

    /**
     * Handle the blog "deleted" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function deleted(blog $blog)
    {
        Cache::tags(['blog'])->flush();
    }

    /**
     * Handle the blog "restored" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function restored(blog $blog)
    {
        Cache::tags(['blog'])->flush();
    }

    /**
     * Handle the blog "force deleted" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function forceDeleted(blog $blog)
    {
        Cache::tags(['blog'])->flush();
    }
}
