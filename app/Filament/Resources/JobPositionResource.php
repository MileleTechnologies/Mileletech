<?php

namespace App\Filament\Resources;

use App\Models\JobPosition;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class JobPositionResource extends Resource
{
    protected static ?string $model = JobPosition::class;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Open Positions';
    protected static string|\UnitEnum|null $navigationGroup = 'Careers';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')->required()->maxLength(255)->columnSpanFull(),
            Forms\Components\TextInput::make('employment_type')->required()->placeholder('e.g. Full-time • On-site')->maxLength(255),
            Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
            Forms\Components\Textarea::make('description')->rows(4)->columnSpanFull(),
            Forms\Components\Toggle::make('is_active')->label('Active (visible on website)')->default(true),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order')
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('employment_type')->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Active'),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->recordActions([ViewAction::make(), EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => \App\Filament\Resources\JobPositionResource\Pages\ListJobPositions::route('/'),
            'create' => \App\Filament\Resources\JobPositionResource\Pages\CreateJobPosition::route('/create'),
            'edit'   => \App\Filament\Resources\JobPositionResource\Pages\EditJobPosition::route('/{record}/edit'),
        ];
    }
}
