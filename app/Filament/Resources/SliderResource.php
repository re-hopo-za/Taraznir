<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Project;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-boards';
    protected static ?string $label = '  اسلایدر ';
    protected static ?string $navigationGroup = 'تنظیمات';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\FileUpload::make('image')
                        ->enableReordering()
                        ->placeholder('بارگذاری تصویر اسلایدر')
                        ->label(' تصویر اسلایدر ')
                        ->imagePreviewHeight(100)  ,
                ]),

                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('عنون')
                        ->required(),
                    Forms\Components\TextInput::make('subtitle')
                        ->label('عنوان دوم')
                        ->required() ,
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
                    Forms\Components\TextInput::make('button_text')
                        ->label('متن دکمه ')
                        ->required(),
                    Forms\Components\Select::make('position')
                        ->label('موقعیت نوشته ')
                        ->required()
                        ->options([
                            'right'   => 'راست',
                            'center'  => 'وسط',
                            'left'    => 'چپ'
                        ]),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
