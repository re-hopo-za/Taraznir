<?php

namespace Modules\Ecommerce\app\Filament\Resources\ProductResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Ecommerce\app\Filament\Resources\ProductResource;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
