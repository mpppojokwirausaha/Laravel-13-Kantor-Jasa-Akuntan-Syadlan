<?php

namespace App\Filament\Resources\OurClients\Pages;

use App\Filament\Resources\OurClients\OurClientResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOurClient extends ViewRecord
{
    protected static string $resource = OurClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
