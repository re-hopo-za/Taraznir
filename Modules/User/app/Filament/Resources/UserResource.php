<?php

namespace Modules\User\app\Filament\Resources;

use Exception;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Core\app\Traits\CommonFilamentResource;
use Modules\User\app\Models\User;
use Modules\User\app\Filament\Resources\UserResource\Pages\CreateUser;
use Modules\User\app\Filament\Resources\UserResource\Pages\EditUser;
use Modules\User\app\Filament\Resources\UserResource\Pages\ListUsers;

class UserResource extends Resource
{
    use CommonFilamentResource;

    protected static ?string $model = User::class;

    protected static ?string $label = ' کاربران ';
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'کاربران';
    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->columns(12) ->schema([
                    Grid::make()->schema([
                        TextInput::make('name'),
                        TextInput::make('email'),
                        TextInput::make('password'),
                        self::formMetaKeyOptions([
                            'instagram' => 'instagram',
                            'telegram' => 'telegram',
                            'whatsapp' => 'whatsapp',
                            'position' => 'تخصص',
                            'student' => 'تعداد دانشجو',
                            'rating' => 'امتیاز',
                            'bio' => 'بیوگرافی',
                        ]),
                    ])->columnSpan(9),
                    Grid::make()->schema([
                        Section::make()->schema([
                            SpatieMediaLibraryFileUpload::make('avatar')
                                ->label('تصویر کاربر')
                                ->collection('avatar')
                        ])

                    ])->columnSpan(3),
                ]),
            ]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
            ])
            ->defaultSort('id')
            ->filters(
                self::filters()
            )
            ->actions(
                self::actions()
            )
            ->bulkActions(
                self::bulkActions()
            );
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    /**
     * @throws Exception
     */
    public static function filters(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit'   => EditUser::route('/{record}/edit'),
        ];
    }


}
