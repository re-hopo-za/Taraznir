<?php

namespace Modules\News\app\Filament\Resources\NewsResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\News\app\Filament\Resources\NewsResource;

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
