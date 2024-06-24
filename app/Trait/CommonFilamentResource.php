<?php

namespace App\Trait;

use Exception;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Misc\Models\Category;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

trait CommonFilamentResource
{



    public static function formTitleAndSlug(): Card
    {
        return
            Card::make()->schema([
                TextInput::make('title')
                    ->label('عنون')
                    ->required(),
                TextInput::make('slug')
                    ->label('نامک')
                    ->required() ,
            ]);
    }


    public static function formMedia(): Card
    {
        return Card::make()->schema([
            SpatieMediaLibraryFileUpload::make('cover')
                ->enableReordering()
                ->placeholder('بارگذاری تصویر اصلی')
                ->label(' تصویر اصلی ')
                ->imagePreviewHeight(200  ) ,
        ]);
    }


    public static function formSummary(): Card
    {
        return
            Card::make()->schema([
                Textarea::make('summary')
                    ->label('خلاصه')
            ]);
    }

    public static function formEditor(): TinyEditor
    {
        return
            TinyEditor::make('content')
                ->showMenuBar()
                ->label('محتوا');
    }


    public static function formStatusAndChosen(): Card
    {
        return
            Card::make()->schema([
                Select::make('status')
                    ->options([
                        'draft' => 'پیش نویس',
                        'publish' => 'منتشر شده'
                    ])
                    ->default('publish')
                    ->columnSpan(6)
                    ->label('وضعیت  ') ,
                TextInput::make('chosen' )
                    ->default(0)
                    ->columnSpan(6 )
                    ->label('انتخاب شده '),
            ]);
    }



    public static function formCategory($model): Card
    {
        return
            Card::make()->schema([
                Select::make('category')
                    ->relationship( 'category' ,'slug' ,
                        fn () => Category::where('model' ,'=' ,$model )
                    )
                    ->multiple()
                    ->label('دسته بندی')
            ]);
    }

    public static function formAttachment(): Card
    {
        return
            Card::make()->schema([
                SpatieMediaLibraryFileUpload::make('attachment')
                    ->collection('attachments')
                    ->multiple()
                    ->placeholder('بارگذاری فایل')
                    ->label('فایل ضمیمه')
                    ->imagePreviewHeight(200)
            ]);
    }


    public static function formMeta( array $options ): Card
    {
        return
            Card::make()->schema([
                TableRepeater::make('meta')
                    ->label('بخش داده های اضافی ')
                    ->relationship('meta')
                    ->schema([
                        Select::make('key')
                            ->label('کلید')
                            ->required()
                            ->options($options),
                        TextInput::make('value')
                            ->label('مقدار')
                            ->required(),
                    ])
                    ->collapsible()
                    ->defaultItems(0)
            ]);
    }


    public static function tableID(): TextColumn
    {
        return
            TextColumn::make('id')
                ->url(fn ($record) => env('APP_URL' ).'/service/'.$record->slug ,true )
                ->formatStateUsing(fn (string $state): string => __("{$state} #") )
                ->label('شناسه');
    }

    public static function tableCover(): SpatieMediaLibraryImageColumn
    {
        return
            SpatieMediaLibraryImageColumn::make('cover')
                ->label('تصویر');
    }

    public static function tableTitle(): TextColumn
    {
        return
            TextColumn::make('title')
                ->sortable()
                ->label('عنوان');
    }

    public static function tableStatus(): TextColumn
    {
        return
            TextColumn::make('status')
                ->enum([
                    'draft' => 'پیش نویس',
                    'publish' => 'منتشر شده'
                ])
                ->label('وضعیت');
    }


    /**
     * @throws Exception
     */
    public static function filters(): array
    {
        return [
            TrashedFilter::make(),
        ];
    }

    /**
     * @throws Exception
     */
    public static function actions(): array
    {
        return [
             EditAction::make(),
             DeleteAction::make(),
        ];
    }

    /**
     * @throws Exception
     */
    public static function bulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
            RestoreBulkAction::make(),
            ForceDeleteBulkAction::make(),
        ];
    }


    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

}
