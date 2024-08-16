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
        SitemapGenerator::create(env('APP_URL'))
            ->getSitemap()
            ->writeToDisk('public', 'sitemap.xml');
    }
}
