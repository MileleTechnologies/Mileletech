<?php

namespace App\Filament\Resources\CareerOpportunityResource\Pages;

use App\Filament\Resources\CareerOpportunityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCareerOpportunities extends ListRecords
{
    protected static string $resource = CareerOpportunityResource::class;
    protected function getHeaderActions(): array { return [CreateAction::make()]; }
}
