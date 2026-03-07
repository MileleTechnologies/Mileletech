<?php

namespace App\Filament\Resources\InternshipTrackResource\Pages;

use App\Filament\Resources\InternshipTrackResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInternshipTracks extends ListRecords
{
    protected static string $resource = InternshipTrackResource::class;
    protected function getHeaderActions(): array { return [CreateAction::make()]; }
}
