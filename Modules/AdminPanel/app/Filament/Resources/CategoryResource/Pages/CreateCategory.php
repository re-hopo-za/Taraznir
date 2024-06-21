<?php

namespace Modules\AdminPanel\app\Filament\Resources\CategoryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\AdminPanel\app\Filament\Resources\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
