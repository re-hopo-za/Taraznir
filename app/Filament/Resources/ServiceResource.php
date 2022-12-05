<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Category;
use App\Models\Service;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $label = '  خدمات  ';
    protected static ?string $navigationIcon = 'heroicon-o-support';
    protected static ?string $navigationGroup = 'پست ها';
    protected static ?int $navigationSort = 1;
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Grid::make()->columns(12) ->schema([
                    Grid::make()->schema([

                        Card::make()->schema([
                            Forms\Components\TextInput::make('title')
                                ->label('عنون')
                                ->required(),
                            Forms\Components\TextInput::make('slug')
                                ->label('نامک')
                                ->required() ,
                        ]),

                        Card::make()->schema([
                            SpatieMediaLibraryFileUpload::make('cover')
                                ->enableReordering()
                                ->placeholder('بارگذاری تصویر اصلی')
                                ->label(' تصویر اصلی ')
                                ->imagePreviewHeight(200  ) ,
                        ]),

                        Card::make()->schema([
                            Forms\Components\Textarea::make('summary')
                                ->label('خلاصه')
                        ]),

                        Card::make()->schema([
                            TableRepeater::make('meta')
                                ->label('بخش داده های اضافی ')
                                ->relationship('meta')
                                ->schema([
                                    Forms\Components\Select::make('key')
                                        ->label('کلید')
                                        ->required()
                                        ->options([
                                            'question_why_install' => 'سوال بخش اول ',
                                            'result_why_install'   => 'پاسخ بخش اول ',
                                            'question_why_service' => 'سوال بخش دوم ',
                                            'result_why_service'   => 'پاسخ بخش دوم ',
                                            'doing_items'          => ' لیست کارها ',
                                            'keywords'             => 'کلمات کلیدی',
                                            'description'          => 'توضیحات',
                                        ]),
                                    Forms\Components\TextInput::make('value')
                                        ->label('مقدار')
                                        ->required(),
                                ])
                                ->collapsible()
                                ->defaultItems(0) ,

                        ]),
                    ])->columnSpan(9 ),

                    Grid::make()->schema([
                        Card::make()->schema([
                            Forms\Components\Select::make('status')
                                ->options([
                                    'draft' => 'پیش نویس',
                                    'publish' => 'منتشر شده'
                                ])
                                ->default('publish')
                                ->columnSpan(6)
                                ->label('وضعیت  ') ,
                            Forms\Components\TextInput::make('chosen' )
                                ->default(0)
                                ->columnSpan(6 )
                                ->label('انتخاب شده '),
                        ]),

                        Card::make()->schema([
                            Forms\Components\MultiSelect::make('categories')
                                ->relationship( 'categories' ,'slug' ,
                                    fn () => Category::where('model' ,'=' ,'service' )
                                )
                                ->label('دسته بندی') ,
                        ]),

                        Card::make()->schema([ //third section
                            SpatieMediaLibraryFileUpload::make('attachment')
                                ->collection('attachments')
                                ->multiple()
                                ->placeholder('بارگذاری فایل')
                                ->label('فایل ضمیمه')
                                ->imagePreviewHeight(200)
                        ]),
                    ])->columnSpan(3 ),
                ]),
            ]);
    }

    /**
     * @param Table $table
     * @return Table
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->url(fn ($record) => env('APP_URL' ).'/service/'.$record->slug ,true )
                    ->formatStateUsing(fn (string $state): string => __("{$state} #") )
                    ->label('شناسه') ,

                SpatieMediaLibraryImageColumn::make('cover')
                    ->collection('cover')
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
            ->defaultSort('id')

            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
