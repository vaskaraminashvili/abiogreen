<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Page Information')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),
                            Forms\Components\TextInput::make('meta_keywords')
                            ->maxLength(255),
                            Forms\Components\Textarea::make('meta_description')
                                ->rows(5)
                                ->maxLength(255)
                                ->columnSpanFull(),
                    ])
                    ->columns(2),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Page::class, 'slug', ignoreRecord: true)
                            ->rules(['alpha_dash'])
                            ->columnSpanFull()
                            ->disabled(),
                        Forms\Components\TextInput::make('title.en')
                            ->label('Title (English)')
                            ->required()
                            ->maxLength(255),
                    ]),
                    Section::make('Page Images')
                               ->description('Manage images for different sections of the page')
                               ->schema([
                                   Grid::make(2)
                                       ->schema([
                                           SpatieMediaLibraryFileUpload::make('top_image')
                                               ->collection('top_image')
                                               ->image()
                                               ->label('Top Image'),
                                               
                                           SpatieMediaLibraryFileUpload::make('top_right_image')
                                               ->collection('top_right_image')
                                               ->image()
                                               ->label('Top Right Image'),
                                               
                                           SpatieMediaLibraryFileUpload::make('middle_image')
                                               ->collection('middle_image')
                                               ->image()
                                               ->label('Middle Image'),
                                               
                                           SpatieMediaLibraryFileUpload::make('middle_center_image')
                                               ->collection('middle_center_image')
                                               ->image()
                                               ->label('Middle Center Image'),
                                       ]),
                               ]),

                Forms\Components\TextInput::make('default_structure')
                    ->maxLength(255),
                Forms\Components\TextInput::make('structure')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
