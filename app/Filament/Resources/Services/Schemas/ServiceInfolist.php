<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('service_title'),
                TextEntry::make('service_slug'),
                TextEntry::make('service_desc')
                    ->columnSpanFull(),
                TextEntry::make('service_pain_poin')
                    ->columnSpanFull(),
                ImageEntry::make('service_image')
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
