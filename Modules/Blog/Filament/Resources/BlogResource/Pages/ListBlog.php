<?php

namespace Modules\Blog\Filament\Resources\BlogResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Blog\Filament\Resources\BlogResource;

class ListBlog extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
