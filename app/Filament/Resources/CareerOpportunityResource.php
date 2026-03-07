<?php

namespace App\Filament\Resources;

use App\Models\CareerOpportunity;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class CareerOpportunityResource extends Resource
{
    protected static ?string $model = CareerOpportunity::class;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Career Opportunities';
    protected static string|\UnitEnum|null $navigationGroup = 'Careers';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\Select::make('section')
                ->required()
                ->options([
                    'what_we_look_for' => 'What We Look For',
                    'departments'      => 'Departments',
                ]),
            Forms\Components\TextInput::make('label')->required()->maxLength(255),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
            Forms\Components\Toggle::make('is_active')->label('Active (visible on website)')->default(true),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                Tables\Columns\TextColumn::make('section')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'what_we_look_for' => 'What We Look For',
                        'departments'      => 'Departments',
                        default            => $state,
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('label')->searchable()->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Active'),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->recordActions([ViewAction::make(), EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => \App\Filament\Resources\CareerOpportunityResource\Pages\ListCareerOpportunities::route('/'),
            'create' => \App\Filament\Resources\CareerOpportunityResource\Pages\CreateCareerOpportunity::route('/create'),
            'edit'   => \App\Filament\Resources\CareerOpportunityResource\Pages\EditCareerOpportunity::route('/{record}/edit'),
        ];
    }
}
