<?php

namespace App\Filament\Resources\FormEntryResource\Pages;

use App\Filament\Resources\FormEntryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormEntry extends EditRecord
{
    protected static string $resource = FormEntryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
