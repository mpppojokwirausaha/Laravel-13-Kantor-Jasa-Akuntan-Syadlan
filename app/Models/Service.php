<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'service_title',
        'service_slug',
        'service_desc',
        'service_image',
        'service_pain_poin',
    ];

    protected static function booted()
    {
        static::creating(function ($Service) {
            if (empty($Service->Service_slug)) {
                $Service->Service_slug = Str::slug($Service->Service_title, '_');
            }

            if (empty($Service->uuid)) {
                $Service->uuid = (string) Str::uuid();
            }
        });

        static::updating(function ($Service) {
            if ($Service->isDirty('Service_image')) {
                $oldImage = $Service->getOriginal('Service_image');

                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleting(function ($Service) {
            if ($Service->Service_image && Storage::disk('public')->exists($Service->Service_image)) {
                Storage::disk('public')->delete($Service->Service_image);
            }
        });
    }

    public function getService()
    {
        return self::all();
    }

    public function getServiceDetail(string $slug)
    {
        return self::where('Service_slug', $slug)->first();
    }
}
