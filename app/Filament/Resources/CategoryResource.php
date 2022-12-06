<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static ?string $label = '  دسته بندی ';
    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';
    protected static ?string $navigationGroup = 'دسته بندی';
    protected static ?int $navigationSort = 3;
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('عنون')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('نامک')
                    ->required() ,
                Forms\Components\Select::make('model')
                    ->label('نوع پست')
                    ->options(
                        [
                            'blog'     => 'بلاگ',
                            'product'  => 'محصول',
                            'service'  => 'خدمات',
                            'project'  => 'پروژه',
                            'standard' => 'استاندارد',
                            'category' => 'کاتالوگ',
                        ]
                    )
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('توضیحات') ,
                Forms\Components\FileUpload::make('cover')
                    ->imagePreviewHeight('500')
                    ->panelAspectRatio('9:1')
                    ->label('کاور ')
                    ->hint('تعیین آیکون'),
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
                Tables\Columns\TextColumn::make('slug')
                    ->label('نامک') ,

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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
