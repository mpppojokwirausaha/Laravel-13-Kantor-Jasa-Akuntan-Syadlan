<?php

namespace App\Filament\Resources\OurClients\Pages;

use App\Filament\Resources\OurClients\OurClientResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurClients extends ListRecords
{
    protected static string $resource = OurClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
