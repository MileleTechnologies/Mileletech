<?php

namespace App\Filament\Resources\CareerOpportunityResource\Pages;

use App\Filament\Resources\CareerOpportunityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCareerOpportunity extends EditRecord
{
    protected static string $resource = CareerOpportunityResource::class;
    protected function getHeaderActions(): array { return [DeleteAction::make()]; }
}
