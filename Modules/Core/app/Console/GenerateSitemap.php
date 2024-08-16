<?php

namespace Modules\Core\app\Console;



use Illuminate\Console\Command;
use Lunar\Models\Product;
use Modules\Blog\app\Models\Blog;
use Modules\Catalog\app\Models\Catalog;
use Modules\Gallery\app\Models\Gallery;
use Modules\Project\app\Models\Project;
use Modules\Service\app\Models\Service;
use Modules\Standard\app\Models\Standard;
use Modules\Tutorial\app\Models\Tutorial;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        // Manually create sitemap
        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add('/');
        $sitemap->add('/contact');
        $sitemap->add('/about');
        $sitemap->add('/about');

        // Dynamic pages
        $models = [
            '/blog/'     => Blog::all(),
            '/catalog/'  => Catalog::all(),
            '/product/'  => Product::all(),
            '/gallery/'  => Gallery::all(),
            '/project/'  => Project::all(),
            '/service/'  => Service::all(),
            '/standard/' => Standard::all(),
            '/tutorial/' => Tutorial::all(),
        ];
        foreach ($models as $endpoint => $model) {
            foreach ($model as $item) {
                if($endpoint == '/product/')
                    $sitemap->add($endpoint.$item->urls?->first()?->slug);
                else
                    $sitemap->add($endpoint.$item->slug);
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
