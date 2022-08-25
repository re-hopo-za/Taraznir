<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;


    protected static ?string $label = '  نظرات  ';
    protected static ?string $navigationIcon = 'heroicon-o-chat-alt';
    protected static ?string $navigationGroup = 'تنظیمات';
    protected static ?int $navigationSort = 3;
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function canCreate(): bool { return false; }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->columns(12) ->schema([
                    Grid::make()->schema([

                        Card::make()->schema([
                            Forms\Components\Textarea::make('comment')
                                ->label('نظر') ,
                            Forms\Components\TextInput::make('commentable_id' )
                                ->label(' شناسه پست')
                                ->disabled()
                                ->required(),
                            Forms\Components\Select::make('commentable_type' )
                                ->label('شماره والد')
                                ->required()
                                ->disabled()
                                ->options([
                                    'App\Models\Blog'    => 'بلاگ',
                                    'App\Models\Product' => 'محصولات',
                                    'App\Models\Project' => 'پروژه ها',
                                    'App\Models\Service' => 'خدمات',
                                ]),
                        ]),


                    ])->columnSpan(9 ),

                    Grid::make()->schema([
                        Card::make()->schema([
                            Forms\Components\Select::make('approved' )
                                ->options([
                                    0 => 'تایید نشده',
                                    1 => 'تایید شده',
                                ])
                                ->columnSpan(6)
                                ->label('وضعیت  ') ,

                            Forms\Components\TextInput::make('user_id' )
                                ->default(0)
                                ->disabled()
                                ->columnSpan(6 )
                                ->label('سازنده') ,
                        ]),
                    ])->columnSpan(3 ),




                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('شناسه') ,

                Tables\Columns\TextColumn::make('comment')
                    ->sortable()
                    ->label('عنوان') ,
                Tables\Columns\TextColumn::make('approved')
                    ->enum([
                        0 => 'تایید نشده',
                        1 => 'تایید شده',
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
