<?php

namespace App\Filament\Resources\InnovationProposals\Pages;

use App\Filament\Resources\InnovationProposals\InnovationProposalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInnovationProposals extends ListRecords
{
    protected static string $resource = InnovationProposalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
