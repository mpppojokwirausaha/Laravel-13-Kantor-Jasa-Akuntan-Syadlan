<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('partner_name')
                    ->required(),
                TextInput::make('partner_position')
                    ->required(),
                Textarea::make('partner_desc')
                    ->columnSpanFull(),
                FileUpload::make('partner_image')
                    ->image()
                    ->required()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public')
                    ->directory('partners'),
            ]);
    }
}
