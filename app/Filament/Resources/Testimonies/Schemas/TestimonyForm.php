<?php

namespace App\Filament\Resources\Testimonies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('testimony_name')
                    ->required(),
                Textarea::make('testimony_comment')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('testimony_start')
                    ->required()
                    ->numeric()
                    ->default(5),
                FileUpload::make('testimony_avatar')
                    ->image()
                    ->required()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public')
                    ->directory('testimonies')
            ]);
    }
}
