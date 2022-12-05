<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
    protected static ?string  $title = 'افزودن محصول';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationMessage(): ?string
    {
        return 'محصول ساخته شد';
    }





}
