<?php

namespace Modules\Ecommerce\app\Filament\Resources;


use Exception;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Core\app\Traits\CommonFilamentResource;
use Modules\Ecommerce\app\Models\Product;
use Modules\Ecommerce\app\Filament\Resources\ProductResource\Pages\CreateProduct;
use Modules\Ecommerce\app\Filament\Resources\ProductResource\Pages\EditProduct;
use Modules\Ecommerce\app\Filament\Resources\ProductResource\Pages\ListProducts;

class ProductResource extends Resource
{
    use CommonFilamentResource;

    protected static ?string $model = Product::class;

    protected static ?string $label = '  محصولات  ';
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'پست ها';
    protected static ?int $navigationSort = 1;
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
                            'regular_price' => 'قیمت عادی',
                            'price'         => 'قیمت',
                            'stock'         => 'موجودی',
                        ]),
                    ])->columnSpan(9 ),
                    Grid::make()->schema([
                        self::formStatusAndChosen(),
                        self::formCategory('product'),
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
            'index'  => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit'   => EditProduct::route('/{record}/edit'),
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
