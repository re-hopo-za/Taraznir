<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormEntryResource\Pages;
use App\Filament\Resources\FormEntryResource\RelationManagers;
use App\Models\FormEntry;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FormEntryResource extends Resource
{
    protected static ?string $model = FormEntry::class;
    protected static ?string $navigationIcon = 'heroicon-o-mail';
    protected static ?string $label = '  ورودی فرم‌ها  ';
    protected static ?string $navigationGroup = 'دیگر';
    protected static ?int $navigationSort = 2;
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormEntries::route('/'),
            'create' => Pages\CreateFormEntry::route('/create'),
            'edit' => Pages\EditFormEntry::route('/{record}/edit'),
        ];
    }
}
