<?php

namespace Modules\Project\app\Filament\Resources;

use Exception;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Core\app\Traits\CommonFilamentResource;
use Modules\Project\app\Models\Project;
use Modules\Project\app\Filament\Resources\ProjectResource\Pages\CreateProject;
use Modules\Project\app\Filament\Resources\ProjectResource\Pages\EditProject;
use Modules\Project\app\Filament\Resources\ProjectResource\Pages\ListProjects;

class ProjectResource extends Resource
{
    use CommonFilamentResource;

    protected static ?string $model = Project::class;
    protected static ?string $label = '  پروژه ها  ';
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
                        self::formCover(),
                        self::formSummary(),
                        self::formEditor(),
                        self::formMetaKeyOptions([
                            'client'     => 'مشتری',
                            'year'       => 'سال اجر',
                            'location'   => 'محل اجرا',
                            'designer'   => 'طراح',
                            'presenter'  => 'مجری',
                            'supervisor' => 'ناظر'
                        ]),
                    ])->columnSpan(9 ),
                    Grid::make()->schema([
                        self::formStatusAndChosen(),
                        self::formCategory('project'),
                        self::formAttachment(),
                    ])->columnSpan(3 ),
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
                self::tableID('project'),
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
            'index'  => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit'   => EditProject::route('/{record}/edit'),
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
