<?php

namespace Modules\Core\app\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
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
use Modules\Tutorial\app\Models\TutorialCourses;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Tags\Video;

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
        if(!File::exists(public_path('sitemaps')))
            File::makeDirectory(public_path('sitemaps'));

        // Manually create sitemap
        $pages     = Sitemap::create();
        $posts     = Sitemap::create();
        $videos    = Sitemap::create();
        $images    = Sitemap::create();
        $video_url = Url::create(env('APP_URL'));
        $image_url = Url::create(env('APP_URL'));

        $pages
            ->add('/')
            ->add('/contact')
            ->add('/about')
            ->writeToFile(public_path('sitemaps/pages-sitemap.xml'));

        foreach ([
            '/blog/'     => Blog::all(),
            '/catalog/'  => Catalog::all(),
            '/product/'  => Product::all(),
            '/gallery/'  => Gallery::all(),
            '/project/'  => Project::all(),
            '/service/'  => Service::all(),
            '/standard/' => Standard::all(),
            '/tutorial/' => Tutorial::all(),
        ] as $endpoint => $model)
            foreach ($model as $item)
                if($endpoint == '/product/')
                    $posts->add($endpoint.$item->urls?->first()?->slug);
                else
                    $posts->add($endpoint.$item->slug);

        foreach (Category::whereNotIn('model' ,['standard' ,'catalog' ,'tutorial' ,'option' ,'news'])->get() as $category)
            $posts->add("/$category->model/category/$category->slug");

        foreach (Collection::all() as $category)
            $posts->add('/product/category/'.$category?->urls()?->first()?->slug);

        foreach (TutorialCourses::with('course')->get() as $video){
            $thumbnailLoc = $video->course?->images['single'] ?? false;
            $description  = $video->course?->summary ?? false;
            $contentLoc   = $video->media?->first()?->getFullUrl() ?? false;
            if($thumbnailLoc && $description && $contentLoc){
                $videos->add(
                    $video_url
                        ->addVideo(
                            $thumbnailLoc,
                            "{$video->course?->title} ($video->title)",
                            $description,
                            $contentLoc,
                            "tutorial/{$video->course?->slug}",
                            ['family_friendly' => Video::OPTION_YES, 'live' => Video::OPTION_NO],
                            ['platform' => Video::OPTION_PLATFORM_WEB],
                            ['restriction' => null]
                        )
                );
            }
        }

        foreach (Gallery::with(['media'])->get() as $item){
            if($item->getMedia('*') && $item->summary){
                foreach($item->getMedia('*') as $image){
                    $images->add(
                        $image_url
                            ->addImage(
                                $image->getUrl('origin'),
                                $item->summary,
                                title: "$item->title ($image->name)"
                            )
                    );
                }
            }
        }
        $posts->writeToFile(public_path('/sitemaps/posts-sitemap.xml'));
        $videos->writeToFile(public_path('/sitemaps/videos-sitemap.xml'));
        $images->writeToFile(public_path('sitemaps/images-sitemap.xml'));

        SitemapIndex::create()
            ->add('sitemaps/pages-sitemap.xml')
            ->add('sitemaps/posts-sitemap.xml')
            ->add('sitemaps/videos-sitemap.xml')
            ->add('sitemaps/images-sitemap.xml')
            ->writeToFile(public_path('sitemap.xml'));

    }
}
