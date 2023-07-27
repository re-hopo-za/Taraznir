<?php

namespace Modules\News\Filament\Resources\NewsResource\Pages;

use Modules\News\Filament\Resources\NewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
