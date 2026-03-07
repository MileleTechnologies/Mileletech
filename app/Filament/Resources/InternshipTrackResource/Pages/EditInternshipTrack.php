<?php

namespace App\Filament\Resources\InternshipTrackResource\Pages;

use App\Filament\Resources\InternshipTrackResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInternshipTrack extends EditRecord
{
    protected static string $resource = InternshipTrackResource::class;
    protected function getHeaderActions(): array { return [DeleteAction::make()]; }
}
