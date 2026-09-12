<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Info extends Model
{
    protected $fillable = [
        'no_whatsapp',
        'instagram',
        'tiktok',
        'address',
        'visi',
        'misi',
        'office_hours',
        'profile_desc',
        'profile_image',
        'founder_name',
        'founder_desc',
        'founder_image',
    ];

    protected static function booted()
    {
        static::updating(function ($info) {
            foreach (['profile_image', 'founder_image'] as $field) {
                if ($info->isDirty($field)) {
                    $oldFile = $info->getOriginal($field);

                    if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                        Storage::disk('public')->delete($oldFile);
                    }
                }
            }
        });
    }

    public function getInfo()
    {
        return self::first();
    }
}
