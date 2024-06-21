<?php

namespace Modules\AdminPanel\app\Filament;


use Filament\Contracts\Plugin;
use Filament\Panel;
use Modules\Blog\app\Filament\Resources\BlogResource;
use Modules\Catalog\app\Filament\Resources\CatalogResource;
use Modules\Ecommerce\app\Filament\Resources\ProductResource;
use Modules\Gallery\app\Filament\Resources\GalleryResource;
use Modules\News\app\Filament\Resources\NewsResource;
use Modules\Project\app\Filament\Resources\ProjectResource;
use Modules\Service\app\Filament\Resources\ServiceResource;
use Modules\Standard\app\Filament\Resources\StandardResource;
use Modules\AdminPanel\app\Filament\Resources\CategoryResource;
use Modules\AdminPanel\app\Filament\Resources\OptionResource;
use Modules\Tutorial\app\Filament\Resources\TutorialResource;
use Modules\User\app\Filament\Resources\UserResource;


class ResourcesList implements Plugin
{
    public function getId(): string
    {
        return 'option';
    }


    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                OptionResource::class,
                CategoryResource::class,
                BlogResource::class,
                ProjectResource::class,
                NewsResource::class,
                TutorialResource::class,
                ServiceResource::class,
                CatalogResource::class,
                StandardResource::class,
                GalleryResource::class,
                UserResource::class,
                ProductResource::class,
            ])
            ->pages([
//                Settings::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
