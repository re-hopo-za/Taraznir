<?php

namespace Modules\Standard\Filament\Resources\StandardResource\Pages;

use Modules\Standard\Filament\Resources\StandardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStandards extends ListRecords
{
    protected static string $resource = StandardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
