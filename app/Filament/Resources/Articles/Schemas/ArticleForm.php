<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('article_title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('article_slug', Str::slug($state)))
                    ->required(),
                TextInput::make('article_slug')
                    ->placeholder('Auto Generated'),
                RichEditor::make('article_content')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'strike',
                        'underline',
                    ])
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('img_articles')
                    ->fileAttachmentsVisibility('public')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('article_image')
                    ->image()
                    ->required()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public')
                    ->directory('articles')
                    ->columnSpanFull(),
            ]);
    }
}
