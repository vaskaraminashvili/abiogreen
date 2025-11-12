<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use App\Repositories\TeamMemberRepository;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Team Members';

    protected static ?string $modelLabel = 'Team Member';

    protected static ?string $pluralModelLabel = 'Team Members';

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Team Member Information')
                    ->schema([
                        Forms\Components\Toggle::make('status')
                            ->label('Status')
                            ->default(true)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('sort')
                            ->label('Sort Order')
                            ->numeric()
                            ->minValue(1)
                            ->default(fn (): int => app(TeamMemberRepository::class)->getNextSortOrder())
                            ->required(),

                        SpatieMediaLibraryFileUpload::make('image')
                            ->label('Team Member Image')
                            ->collection('team')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '677:688',
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Personal Information')
                    ->schema([
                        Forms\Components\TextInput::make('name.en')
                            ->label('Name (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('surname.en')
                            ->label('Surname (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('position.en')
                            ->label('Position (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('description.en')
                            ->label('Description (English)')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

                // Forms\Components\Section::make('Profile Data')
                //     ->schema([
                //         Forms\Components\KeyValue::make('profile_data')
                //             ->keyLabel('Attribute') // e.g., "Location"
                //             ->valueLabel('Value')   // e.g., "Germany"
                //             ->addable(false)        // Remove if you want to allow adding new fields
                //             ->deletable(false)      // Remove if you want to allow deleting fields
                //             ->editableKeys(false)   // Prevent editing the keys
                //             ->required()
                //             ->columnSpanFull(),
                //     ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->sortable()
                    ->alignCenter()
                    ->size('sm'),

                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Image')
                    ->collection('team')
                    ->conversion('thumb')
                    ->size(60),

                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->getStateUsing(
                        fn (TeamMember $record): string => $record->getTranslation('name', app()->getLocale()) ??
                            $record->getTranslation('name', 'en') ??
                            'No name'
                    )
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('surname')
                    ->label('Surname')
                    ->getStateUsing(
                        fn (TeamMember $record): string => $record->getTranslation('surname', app()->getLocale()) ??
                            $record->getTranslation('surname', 'en') ??
                            'No surname'
                    )
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('position')
                    ->label('Position')
                    ->getStateUsing(
                        fn (TeamMember $record): string => $record->getTranslation('position', app()->getLocale()) ??
                            $record->getTranslation('position', 'en') ??
                            'No position'
                    )
                    ->searchable()
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
            ->reorderable('sort')
            ->defaultSort('sort');
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
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
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
