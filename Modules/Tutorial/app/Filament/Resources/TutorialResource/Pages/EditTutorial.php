<?php

namespace Modules\Tutorial\app\Filament\Resources\TutorialResource\Pages;

use Modules\Tutorial\app\Filament\Resources\TutorialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTutorial extends EditRecord
{
    protected static string $resource = TutorialResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

}
