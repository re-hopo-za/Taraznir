<?php

namespace Modules\Tutorial\app\Filament\Resources\TutorialResource\Pages;

use Modules\Tutorial\app\Filament\Resources\TutorialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTutorials extends ListRecords
{
    protected static string $resource = TutorialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
