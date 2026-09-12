<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class OurClient extends Model
{
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'ourClient_title',
        'ourClient_link',
        'ourClient_image',
    ];

    protected static function booted()
    {
        static::creating(function ($client) {
            if (empty($client->uuid)) {
                $client->uuid = (string) Str::uuid();
            }
        });

        static::updating(function ($client) {
            if ($client->isDirty('ourClient_image')) {
                $oldImage = $client->getOriginal('ourClient_image');

                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleting(function ($client) {
            if ($client->ourClient_image && Storage::disk('public')->exists($client->ourClient_image)) {
                Storage::disk('public')->delete($client->ourClient_image);
            }
        });
    }

    public function getClients()
    {
        return self::all();
    }
}
