<?php

namespace App\Filament\Resources\InnovationProposals\Pages;

use App\Filament\Resources\InnovationProposals\InnovationProposalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInnovationProposal extends EditRecord
{
    protected static string $resource = InnovationProposalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
