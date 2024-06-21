<?php

namespace Modules\User\app\Filament\Resources\UserResource\Pages;

use Illuminate\Support\Facades\Hash;
use Modules\User\app\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\User\app\Models\User;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if(empty($data['password']))
            $data['password'] = User::where('email' ,$data['email'])->first()?->password;

        return $data;
    }
}
