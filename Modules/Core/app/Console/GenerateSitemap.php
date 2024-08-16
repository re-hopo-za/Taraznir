<?php

namespace Modules\Core\app\Console;



use Illuminate\Console\Command;
use Lunar\Models\Collection;
use Lunar\Models\Product;
use Modules\Blog\app\Models\Blog;
use Modules\Catalog\app\Models\Catalog;
use Modules\Core\app\Models\Category;
use Modules\Gallery\app\Models\Gallery;
use Modules\Project\app\Models\Project;
use Modules\Service\app\Models\Service;
use Modules\Standard\app\Models\Standard;
use Modules\Tutorial\app\Models\Tutorial;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;

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

        foreach (Category::whereNotIn('model' ,['standard' ,'catalog' ,'tutorial' ,'option' ,'news'])->get() as $category)
            $sitemap->add("/$category->model/category/$category->slug");

        foreach (Collection::all() as $category)
            $sitemap->add('/product/category/'.$category?->urls()?->first()?->slug);

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
