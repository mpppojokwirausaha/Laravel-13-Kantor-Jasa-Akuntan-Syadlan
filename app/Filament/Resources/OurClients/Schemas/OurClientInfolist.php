<?php

namespace App\Filament\Resources\OurClients\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OurClientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('ourClient_title'),
                TextEntry::make('ourClient_link')
                    ->placeholder('-'),
                ImageEntry::make('ourClient_image')
                    ->placeholder('-')
                    ->circular(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
