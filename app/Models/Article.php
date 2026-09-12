<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'article_title',
        'article_slug',
        'article_content',
        'article_image',
    ];

    protected static function booted()
    {
        static::creating(function ($article) {
            if (empty($article->article_slug)) {
                $article->article_slug = Str::slug($article->article_title, '_');
            }

            if (empty($article->uuid)) {
                $article->uuid = (string) Str::uuid();
            }
        });

        static::updating(function ($article) {
            if ($article->isDirty('article_image')) {
                $oldImage = $article->getOriginal('article_image');

                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleting(function ($article) {
            if ($article->article_image && Storage::disk('public')->exists($article->article_image)) {
                Storage::disk('public')->delete($article->article_image);
            }
        });
    }

    public function getArticle()
    {
        return self::all();
    }

    public function getArticleDetail(string $slug)
    {
        return self::where('article_slug', $slug)->first();
    }

    // Accessors turunan, dipakai di view/controller
    public function getImageUrlAttribute(): ?string
    {
        return $this->article_image
            ? Storage::disk('public')->url($this->article_image)
            : null;
    }

    public function getExcerptAttribute(): string
    {
        $plain = strip_tags($this->article_content ?? '');
        return Str::limit($plain, 140);
    }

    public function getReadingTimeAttribute(): int
    {
        $words = str_word_count(strip_tags($this->article_content ?? ''));
        return max(1, (int) ceil($words / 200));
    }
}
