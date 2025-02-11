<?php

namespace Modules\Core\app\Traits;

use Exception;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Modules\Core\app\Models\Category;
use Modules\User\app\Models\User;
use Parallax\FilamentComments\Actions\CommentsAction;

trait CommonFilamentResource
{


    public static function formTitleAndSlug(): Section
    {
        return
            Section::make()->schema([
                TextInput::make('title')
                    ->label('عنون')
                    ->required(),
                TextInput::make('slug')
                    ->label('نامک')
                    ->required() ,
            ]);
    }

    public static function formSummary(): Section
    {
        return
            Section::make()->schema([
                Textarea::make('summary')
                    ->label('خلاصه')
            ]);
    }

    public static function formDescription(): Textarea
    {
        return
            Textarea::make('description')
                ->label('توضیحات');

    }

    public static function formEditor($key = 'content'): Section
    {
        return
            Section::make()->schema([
                RichEditor::make($key)
                    ->label('محتوا')
            ]);
    }

    public static function formTitle(): TextInput
    {
        return
            TextInput::make('title')
                ->label('عنوان')
                ->required();
    }

    public static function formSlug(): TextInput
    {
        return
            TextInput::make('slug')
                ->label('نامک')
                ->required();
    }


    public static function formKey(): TextInput
    {
        return
            TextInput::make('key')
                ->label('کلید')
                ->required();
    }

    public static function formToggleTextType(): Toggle
    {
        return
            Toggle::make('type')
                ->label('Save As HTML');
    }


    public static function formAuthorSelect(): Section
    {
        return
            Section::make()->schema([
                Select::make('author_id')
                    ->label('نویسنده')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable()
                    ->columnSpan(6)
            ]);
    }


    public static function formStatusAndChosen(): Section
    {
        return
            Section::make()->schema([
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


    public static function formSelectBox( array $options ,$column ,$title): Select
    {
        return
            Select::make($column)
            ->label($title)
            ->options(
                $options
            )
            ->required();
    }


    public static function formCategory($model): Section
    {
        return
            Section::make()->schema([
                Select::make('technologies')
                    ->multiple()
                    ->relationship(name:'category' ,titleAttribute: 'title')
                    ->options(
                        Category::where('model' ,'=' ,$model )
                            ->get()
                            ->pluck('title' ,'id')
                            ->toArray()
                    )
                    ->label('دسته بندی')
            ]);
    }

    public static function formCover(): Section
    {
        return
            Section::make()->schema([
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('index')
                    ->multiple()
                    ->label('تصویر')
            ]);
    }

    public static function formIcon(): Section
    {
        return
            Section::make()->schema([
                IconPicker::make('icon')

                    ->columns([
                        'default' => 1,
                        'lg' => 4,
                        '2xl' => 5,
                    ])
            ])->columnSpan(2);
    }


    public static function formAttachment(): Section
    {
        return
            Section::make()->schema([
                SpatieMediaLibraryFileUpload::make('attachment')
                    ->collection('attachment')
                    ->multiple()
                    ->label('فایل ضمیمه')
            ]);
    }

    public static function formMetaKeyOptions(array $options = [] ): Section
    {
        return
            Section::make()->schema([
                Repeater::make('meta')
                    ->label('متا')
                    ->schema([
                        Select::make('key')
                            ->options($options)
                            ->required(),
                        Textarea::make('value')
                            ->label('مقدار')
                    ])
                    ->relationship('meta')
                    ->collapsible()
                    ->defaultItems(0),
            ]);
    }


    public static function formTutorialCourses(): Section
    {
        return Section::make()->schema([
            Repeater::make('tutorialCourses')
                ->label('لیست دروس')
                ->schema([
                    Fieldset::make('tutorialCourses')
                        ->label(' دروس')
                        ->schema([
                            TextInput::make('index')
                                ->label('شماره'),
                            TextInput::make('title')
                                ->label('عنوان'),
                            TextInput::make('link')
                                ->label('لینک'),
                            TextInput::make('time')
                                ->label('زمان'),
                            SpatieMediaLibraryFileUpload::make('course')
                                ->label('فایل آموزش')
                                ->collection('course')
                        ])
                ])
                ->relationship('courses')
                ->collapsible()
                ->defaultItems(0),
        ]);
    }


    public static function formMetaByTextarea(): Section
    {
        return
            Section::make()
                ->schema([
                    Repeater::make('meta')
                        ->label('متا')
                        ->schema([
                            TextInput::make('key')
                                ->required(),
                            Textarea::make('value')
                                ->label('مقدار'),
                        ])
                        ->relationship('meta')
                        ->collapsible()
                        ->columns()
                        ->defaultItems(0),
            ]);
    }


    public static function formAuthor(): Section
    {
        return
            Section::make()
                ->schema([
                    Select::make('author_id')
                        ->label('نویسنده‌')
                        ->options(User::all()->pluck('name', 'id'))
                        ->searchable()
                ]);
    }


    public static function tableID($model): TextColumn
    {
        return
            TextColumn::make('id')
                ->url(fn ($record) => env('APP_URL' )."/$model/".$record->slug ,true )
                ->formatStateUsing(fn (string $state): string => __("$state #") )
                ->label('شناسه');

    }


    public static function tableTitle(): TextColumn
    {
        return
            TextColumn::make('title')
                ->sortable()
                ->label('عنوان');
    }

    public static function tableSlug(): TextColumn
    {
        return
            TextColumn::make('slug')
                ->sortable()
                ->label('نامک');
    }

    public static function tableStatus(): TextColumn
    {
        return
            TextColumn::make('status')
                ->label('وضعیت');
    }

    public static function tableSelect(): TextColumn
    {
        return
            TextColumn::make('status')
                ->label('وضعیت');
    }


    public static function tableCover(): ImageColumn
    {
        return
            ImageColumn::make('images')
                ->limit(1)
                ->label('تصویر شاخص');
    }

    public static function tableCategory(): TextColumn
    {
        return
            TextColumn::make('category.title')
                ->label('دسته بندی');
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
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
            EditAction::make(),
        ];
    }

    /**
     * @throws Exception
     */
    public static function bulkActions(): array
    {
        return [
            BulkActionGroup::make([
                DeleteBulkAction::make(),
                ForceDeleteBulkAction::make(),
                RestoreBulkAction::make(),
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

}
