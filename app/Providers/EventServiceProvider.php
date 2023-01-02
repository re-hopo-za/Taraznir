<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Catalog;
use App\Models\Option;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Standard;
use App\Observers\BlogObserver;
use App\Observers\CatalogObserver;
use App\Observers\OptionObserver;
use App\Observers\ProductObserver;
use App\Observers\ProjectObserver;
use App\Observers\ServiceObserver;
use App\Observers\StandardObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Project::observe(ProjectObserver::class);
        Blog::observe(BlogObserver::class);
        Service::observe(ServiceObserver::class);
        Catalog::observe(CatalogObserver::class);
        Standard::observe(StandardObserver::class);
        Product::observe(ProductObserver::class);
        Option::observe(OptionObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
