<?php

namespace Modules\Tutorial\app\Filament\Resources\TutorialResource\Pages;

use Modules\Tutorial\app\Filament\Resources\TutorialResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTutorial extends CreateRecord
{
    protected static string $resource = TutorialResource::class;
}
