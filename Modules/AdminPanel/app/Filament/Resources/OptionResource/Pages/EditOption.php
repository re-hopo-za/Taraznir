<?php

namespace Modules\AdminPanel\app\Filament\Resources\OptionResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\AdminPanel\app\Filament\Resources\OptionResource;

class EditOption extends EditRecord
{
    protected static string $resource = OptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
