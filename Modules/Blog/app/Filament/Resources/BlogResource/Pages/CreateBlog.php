<?php

namespace Modules\Blog\app\Filament\Resources\BlogResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Blog\app\Filament\Resources\BlogResource;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
