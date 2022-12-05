<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Filament\Resources\BrandResource\RelationManagers;
use App\Models\Brand;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $label = '  کارفرمایان ';
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
                    Forms\Components\Select::make('status')
                        ->label(' وضعیت  ')
                        ->required()
                        ->options([
                            'publish' => 'منتشر شده',
                            'draft'   => 'پیش نویس',
                        ]),
                    Forms\Components\TextInput::make('link')
                        ->label('لینک دکمه ')
                        ->required(),
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
                Tables\Columns\TextColumn::make('status')
                    ->enum([
                        'draft' => 'پیش نویس',
                        'publish' => 'منتشر شده'
                    ])
                    ->label('وضعیت'),
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
