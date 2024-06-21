<?php

namespace Modules\Standard\app\Filament\Resources\StandardResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Standard\app\Filament\Resources\StandardResource;

class EditStandard extends EditRecord
{
    protected static string $resource = StandardResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
