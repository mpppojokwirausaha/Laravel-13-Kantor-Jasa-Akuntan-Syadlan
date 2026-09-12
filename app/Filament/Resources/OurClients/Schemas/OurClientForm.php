<?php

namespace App\Filament\Resources\OurClients\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OurClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('ourClient_title')
                    ->required(),
                TextInput::make('ourClient_link'),
                FileUpload::make('ourClient_image')
                    ->image()
                    ->required()
                    ->imageAspectRatio('16:9')
                    ->imageEditor()
                    ->automaticallyOpenImageEditorForAspectRatio()
                    ->directory('Clients')
                    ->visibility('public'),
            ]);
    }
}
