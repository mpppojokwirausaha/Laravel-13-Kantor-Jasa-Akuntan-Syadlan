<?php

namespace App\Filament\Pages;

use BackedEnum;
use UnitEnum;
use Filament\Pages\Page;
use App\Models\Info;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static ?string $navigationLabel = 'Pengaturan Website';
    protected static ?int $navigationSort = 60;
    protected string $view = 'filament.pages.settings';
    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    public Info $info;

    public array $data = [];

    public static function canAccess(): bool
    {
        return true;
    }

    public function mount(): void
    {
        $this->info = Info::firstOrFail();
        $this->form->fill($this->info->toArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Website Settings')
                    ->description('section untuk mengatur informasi website')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('no_whatsapp')
                                ->label('No. Telepon')
                                ->required(),

                            TextInput::make('instagram')
                                ->label('Instagram')
                                ->required(),

                            TextInput::make('tiktok')
                                ->label('Tiktok')
                                ->required(),

                            Textarea::make('address')
                                ->label('Address')
                                ->required(),

                            TextInput::make('office_hours')
                                ->label('office_hours')
                                ->required(),
                        ]),
                    ])->columns(1),

                Section::make('Profil Perusahaan')
                    ->description('section untuk mengatur profil dan pendiri perusahaan')
                    ->schema([
                        Grid::make(2)->schema([
                            RichEditor::make('profile_desc')
                                ->toolbarButtons([
                                    'bold',
                                    'bulletList',
                                    'italic',
                                    'strike',
                                    'underline',
                                ])
                                ->required(),

                            FileUpload::make('profile_image')
                                ->label('Gambar Profil')
                                ->image()
                                ->required()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->visibility('public')
                                ->directory('info'),

                            TextInput::make('founder_name')
                                ->label('Nama Pendiri')
                                ->required(),
                            FileUpload::make('founder_image')
                                ->label('Foto Pendiri')
                                ->image()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->disk('public')
                                ->directory('info')
                                ->imageEditor(),

                            RichEditor::make('founder_desc')
                                ->toolbarButtons([
                                    'bold',
                                    'bulletList',
                                    'italic',
                                    'strike',
                                    'underline',
                                ])
                                ->required()
                                ->columnSpanFull(),

                            RichEditor::make('misi')
                                ->toolbarButtons([
                                    'bold',
                                    'bulletList',
                                    'italic',
                                    'strike',
                                    'underline',
                                ])
                                ->required(),
                            RichEditor::make('visi')
                                ->toolbarButtons([
                                    'bold',
                                    'bulletList',
                                    'italic',
                                    'strike',
                                    'underline',
                                ])
                                ->required()
                        ]),
                    ])->columns(1),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->info->update($data);

        Notification::make()
            ->title('Pengaturan Diperbarui')
            ->success()
            ->body('Informasi pengaturan berhasil disimpan.')
            ->send();
    }
}
