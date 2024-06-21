<?php

namespace Modules\Blog\app\Filament\Resources\BlogResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Blog\app\Filament\Resources\BlogResource;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
