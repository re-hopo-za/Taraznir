<?php

namespace Modules\AdminPanel\app\Filament\Resources\OptionResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\AdminPanel\app\Filament\Resources\OptionResource;

class ListOptions extends ListRecords
{
    protected static string $resource = OptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
