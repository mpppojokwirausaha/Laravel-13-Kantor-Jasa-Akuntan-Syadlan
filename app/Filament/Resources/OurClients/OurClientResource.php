<?php

namespace App\Filament\Resources\OurClients;

use App\Filament\Resources\OurClients\Pages\CreateOurClient;
use App\Filament\Resources\OurClients\Pages\EditOurClient;
use App\Filament\Resources\OurClients\Pages\ListOurClients;
use App\Filament\Resources\OurClients\Pages\ViewOurClient;
use App\Filament\Resources\OurClients\Schemas\OurClientForm;
use App\Filament\Resources\OurClients\Schemas\OurClientInfolist;
use App\Filament\Resources\OurClients\Tables\OurClientsTable;
use App\Models\OurClient;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurClientResource extends Resource
{
    protected static ?string $model = OurClient::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OurClientForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OurClientInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurClientsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOurClients::route('/'),
            'create' => CreateOurClient::route('/create'),
            'view' => ViewOurClient::route('/{record}'),
            'edit' => EditOurClient::route('/{record}/edit'),
        ];
    }
}
