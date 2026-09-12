<?php

namespace App\Filament\Resources\OurClients\Pages;

use App\Filament\Resources\OurClients\OurClientResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditOurClient extends EditRecord
{
    protected static string $resource = OurClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
