<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubCompanyResource\Pages;
use App\Models\SubCompany;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubCompanyResource extends Resource
{
    protected static ?string $model = SubCompany::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationLabel = 'Sub Companies';

    protected static ?string $modelLabel = 'Sub Company';

    protected static ?string $pluralModelLabel = 'Sub Companies';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Sub Company Information')
                    ->schema([
                        Forms\Components\Toggle::make('status')
                            ->label('Status')
                            ->default(true)
                            ->columnSpanFull(),

                        SpatieMediaLibraryFileUpload::make('images')
                            ->label('Sub Company Images')
                            ->collection('images')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->multiple()
                            ->reorderable()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\TextInput::make('title.en')
                            ->label('Title (English)')
                            ->required()
                            ->maxLength(255),

                        // Forms\Components\TextInput::make('title.ka')
                        //     ->label('Title (Georgian)')
                        //     ->maxLength(255),

                        Forms\Components\TextInput::make('short_desc.en')
                            ->label('Short Description (English)')
                            ->required(),
                        Forms\Components\TextInput::make('external_link')
                            ->label('External Link'),

                        // Forms\Components\Textarea::make('short_desc.ka')
                        //     ->label('Short Description (Georgian)')
                        //     ->rows(3)
                        //     ->maxLength(500),

                        Forms\Components\RichEditor::make('description.en')
                            ->label('Description (English)')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                                'undo',
                                'redo',
                            ])
                            ->columnSpanFull(),

                        // Forms\Components\RichEditor::make('description.ka')
                        //     ->label('Description (Georgian)')
                        //     ->toolbarButtons([
                        //         'bold',
                        //         'italic',
                        //         'underline',
                        //         'bulletList',
                        //         'orderedList',
                        //         'link',
                        //         'undo',
                        //         'redo',
                        //     ]),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->label('Image')
                    ->collection('images')
                    ->conversion('thumb')
                    ->size(60)
                    ->limit(1),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->getStateUsing(
                        fn (SubCompany $record): string => $record->getTranslation('title', app()->getLocale()) ??
                            $record->getTranslation('title', 'en') ??
                            'No title'
                    )
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('short_desc')
                    ->label('Short Description')
                    ->getStateUsing(
                        fn (SubCompany $record): string => $record->getTranslation('short_desc', app()->getLocale()) ??
                            $record->getTranslation('short_desc', 'en') ??
                            'No description'
                    )
                    ->limit(50)
                    ->wrap(),

                Tables\Columns\IconColumn::make('status')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('status')
                    ->label('Status')
                    ->boolean()
                    ->trueLabel('Active')
                    ->falseLabel('Inactive')
                    ->native(false),

                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
                    ->icon('heroicon-m-ellipsis-vertical')
                    ->size('sm')
                    ->color('gray')
                    ->button(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
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
            'index' => Pages\ListSubCompanies::route('/'),
            'create' => Pages\CreateSubCompany::route('/create'),
            'edit' => Pages\EditSubCompany::route('/{record}/edit'),
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
