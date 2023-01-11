<?php

namespace App\Observers;

use App\Models\category;

class CategoryObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  \App\Models\category  $category
     * @return void
     */
    public function created(category $category)
    {
        redisRemover('categories:*');
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  \App\Models\category  $category
     * @return void
     */
    public function updated(category $category)
    {
        redisRemover('categories:*');
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Models\category  $category
     * @return void
     */
    public function deleted(category $category)
    {
        redisRemover('categories:*');
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  \App\Models\category  $category
     * @return void
     */
    public function restored(category $category)
    {
        redisRemover('categories:*');
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  \App\Models\category  $category
     * @return void
     */
    public function forceDeleted(category $category)
    {
        redisRemover('categories:*');
    }
}
