<?php

namespace App\Observers;

use App\Models\blog;

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
        redisRemover('blogs');
    }

    /**
     * Handle the blog "updated" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function updated(blog $blog)
    {
        redisRemover('blogs');
    }

    /**
     * Handle the blog "deleted" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function deleted(blog $blog)
    {
        redisRemover('blogs');
    }

    /**
     * Handle the blog "restored" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function restored(blog $blog)
    {
        redisRemover('blogs');
    }

    /**
     * Handle the blog "force deleted" event.
     *
     * @param  \App\Models\blog  $blog
     * @return void
     */
    public function forceDeleted(blog $blog)
    {
        redisRemover('blogs');
    }
}
