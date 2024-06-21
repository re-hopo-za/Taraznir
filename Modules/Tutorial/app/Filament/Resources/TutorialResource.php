<?php

namespace Modules\Tutorial\app\Filament\Resources;

use Exception;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Core\app\Traits\CommonFilamentResource;
use Modules\Tutorial\app\Models\Tutorial;
use Modules\Tutorial\app\Filament\Resources\TutorialResource\Pages\CreateTutorial;
use Modules\Tutorial\app\Filament\Resources\TutorialResource\Pages\EditTutorial;
use Modules\Tutorial\app\Filament\Resources\TutorialResource\Pages\ListTutorials;

class TutorialResource extends Resource
{
    use CommonFilamentResource;

    protected static ?string $model = Tutorial::class;

    protected static ?string $label = ' آموزش تصویری ';
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'پست ها';
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
                        self::formTitleAndSlug(),
                        self::formEditor(),
                        self::formCover(),
                        self::formSummary(),
                        self::formTutorialCourses(),
                        self::formMetaKeyOptions([
                            'rate' => 'امتیاز',
                            'lang' => 'زبان',
                        ]),
                    ])->columnSpan(9),
                    Grid::make()->schema([
                        self::formAuthorSelect(),
                        self::formStatusAndChosen(),
                        self::formCategory('tutorial'),
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
                self::tableID('tutorial'),
                self::tableCategory(),
                self::tableCover(),
                self::tableTitle(),
                self::tableStatus(),
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

    public static function getPages(): array
    {
        return [
            'index'  => ListTutorials::route('/'),
            'create' => CreateTutorial::route('/create'),
            'edit'   => EditTutorial::route('/{record}/edit'),
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
