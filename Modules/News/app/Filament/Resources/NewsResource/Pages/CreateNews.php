<?php

namespace Modules\News\app\Filament\Resources\NewsResource\Pages;

use Modules\News\app\Filament\Resources\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
