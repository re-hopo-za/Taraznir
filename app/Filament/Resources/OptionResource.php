<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OptionResource\Pages;
use App\Filament\Resources\OptionResource\RelationManagers;
use App\Models\Option;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OptionResource extends Resource
{
    protected static ?string $model = Option::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'تنظیمات';
    protected static ?string $label = ' گزینه ها  ';
    protected static ?int $navigationSort = 1;
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\Select::make('key')
                        ->label('کلید')
                        ->required()
                        ->options([
                            'first_section_home_title'  => 'عنوان بخش اول صفحه اصلی',
                            'first_section_home_text'  => 'متن  بخش اول  صفحه اصلی',
                        ]),
                    Forms\Components\TextInput::make('value')
                        ->label('مقدار')
                        ->required(),
                    Forms\Components\FileUpload::make('image')
                        ->placeholder('بارگذاری تصویر  ')
                        ->label(' تصویر ')
                        ->imagePreviewHeight(100)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover')
                    ->label('کاور') ,

                Tables\Columns\TextColumn::make('title')
                    ->label('عنون')
                    ->sortable(),

                Tables\Columns\TextColumn::make('model')
                    ->enum([
                        'blog'     => 'بلاگ',
                        'product'  => 'محصول',
                        'service'  => 'خدمات',
                        'project'  => 'پروژه',
                        'resource' => 'منابع',
                    ])
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
            'index' => Pages\ListOptions::route('/'),
            'create' => Pages\CreateOption::route('/create'),
            'edit' => Pages\EditOption::route('/{record}/edit'),
        ];
    }
}
