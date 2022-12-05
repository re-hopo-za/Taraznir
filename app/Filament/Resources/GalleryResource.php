<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $navigationIcon = 'heroicon-o-photograph';
    protected static ?string $label = '  گالری ';
    protected static ?string $navigationGroup = 'تنظیمات';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\FileUpload::make('cover')
                        ->enableReordering()
                        ->placeholder('بارگذاری تصویر اسلایدر')
                        ->label(' تصویر اسلایدر ')
                        ->imagePreviewHeight(100)  ,
                ]),

                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('عنون')
                        ->required(),
                ]),

                Card::make()->schema([
                    Forms\Components\TextInput::make('chosen' )
                        ->default(0)
                        ->columnSpan(6 )
                        ->label('انتخاب شده '),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id') ,

                Tables\Columns\ImageColumn::make('image')
                    ->label('تصویر') ,

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->label('عنوان') ,
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
