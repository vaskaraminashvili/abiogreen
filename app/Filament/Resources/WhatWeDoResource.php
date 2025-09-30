<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatWeDoResource\Pages;
use App\Models\WhatWeDo;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WhatWeDoResource extends Resource
{
    protected static ?string $model = WhatWeDo::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationLabel = 'What We Do';

    protected static ?string $modelLabel = 'What We Do';

    protected static ?string $pluralModelLabel = 'What We Do';

    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Record Information')
                    ->schema([
                        Forms\Components\Toggle::make('status')
                            ->label('Status')
                            ->default(true)
                            ->columnSpanFull(),

                        SpatieMediaLibraryFileUpload::make('image')
                            ->label('Image')
                            ->collection('whatWeDo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\TextInput::make('title.en')
                            ->label('Title (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('short_description.en')
                            ->label('Short Description (English)')
                            ->rows(3)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('description.en')
                            ->label('Description (English)')
                            ->rows(6)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Image')
                    ->collection('whatWeDo')
                    ->conversion('thumb')
                    ->size(60),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->getStateUsing(
                        fn (WhatWeDo $record): string => $record->getTranslation('title', app()->getLocale()) ??
                            $record->getTranslation('title', 'en') ??
                            'No title'
                    )
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('short_description')
                    ->label('Short Description')
                    ->getStateUsing(
                        fn (WhatWeDo $record): string => (string) ($record->getTranslation('short_description', app()->getLocale()) ??
                            $record->getTranslation('short_description', 'en') ?? '')
                    )
                    ->limit(60)
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
            'index' => Pages\ListWhatWeDos::route('/'),
            'create' => Pages\CreateWhatWeDo::route('/create'),
            'edit' => Pages\EditWhatWeDo::route('/{record}/edit'),
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
