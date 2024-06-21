<?php

namespace Modules\Catalog\app\Filament\Resources\CatalogResource\Pages;

use Filament\Actions\CreateAction;
use Modules\Catalog\app\Filament\Resources\CatalogResource;
use Filament\Resources\Pages\ListRecords;

class ListCatalogs extends ListRecords
{
    protected static string $resource = CatalogResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
