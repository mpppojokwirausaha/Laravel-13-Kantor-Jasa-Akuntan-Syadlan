<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('service_title')
                    ->required(),
                TextInput::make('service_slug')
                    ->required(),
                Textarea::make('service_desc')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('service_pain_poin')
                    ->required(),
                FileUpload::make('service_image')
                    ->image()
                    ->required()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public')
                    ->directory('services')
            ]);
    }
}
