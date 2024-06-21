<?php

namespace Modules\Gallery\app\Filament\Resources\GalleryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Gallery\app\Filament\Resources\GalleryResource;

class ViewGallery extends ViewRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
