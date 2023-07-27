<?php

namespace Modules\Blog\Filament\Resources\BlogResource\Pages;

use Modules\Blog\Filament\Resources\BlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
