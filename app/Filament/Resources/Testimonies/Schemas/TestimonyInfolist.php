<?php

namespace App\Filament\Resources\Testimonies\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TestimonyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('testimony_name'),
                TextEntry::make('testimony_start')
                    ->numeric(),
                TextEntry::make('testimony_comment')
                    ->columnSpanFull(),
                ImageEntry::make('testimony_avatar')
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
