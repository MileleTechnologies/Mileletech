<?php

namespace App\Filament\Resources\InnovationProposals;

use App\Filament\Resources\InnovationProposals\Pages\CreateInnovationProposal;
use App\Filament\Resources\InnovationProposals\Pages\EditInnovationProposal;
use App\Filament\Resources\InnovationProposals\Pages\ListInnovationProposals;
use App\Filament\Resources\InnovationProposals\Schemas\InnovationProposalForm;
use App\Filament\Resources\InnovationProposals\Tables\InnovationProposalsTable;
use App\Models\InnovationProposal;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InnovationProposalResource extends Resource
{
    protected static ?string $model = InnovationProposal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return InnovationProposalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InnovationProposalsTable::configure($table);
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
            'index' => ListInnovationProposals::route('/'),
            'create' => CreateInnovationProposal::route('/create'),
            'edit' => EditInnovationProposal::route('/{record}/edit'),
        ];
    }
}
