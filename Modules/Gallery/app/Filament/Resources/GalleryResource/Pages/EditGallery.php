<?php

namespace Modules\Gallery\app\Filament\Resources\GalleryResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Gallery\app\Filament\Resources\GalleryResource;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
