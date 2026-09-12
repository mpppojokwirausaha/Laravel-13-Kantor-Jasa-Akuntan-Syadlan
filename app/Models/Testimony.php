<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Testimony extends Model
{
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'testimony_name',
        'testimony_avatar',
        'testimony_comment',
        'testimony_start',
    ];

    protected static function booted()
    {
        static::creating(function ($testimony) {
            if (empty($testimony->uuid)) {
                $testimony->uuid = (string) Str::uuid();
            }
        });

        // Hapus avatar lama saat update
        static::updating(function ($testimony) {
            if ($testimony->isDirty('testimony_avatar')) {
                $oldAvatar = $testimony->getOriginal('testimony_avatar');

                if ($oldAvatar && Storage::disk('public')->exists($oldAvatar)) {
                    Storage::disk('public')->delete($oldAvatar);
                }
            }
        });

        // Hapus avatar saat data dihapus
        static::deleting(function ($testimony) {
            if ($testimony->testimony_avatar && Storage::disk('public')->exists($testimony->testimony_avatar)) {
                Storage::disk('public')->delete($testimony->testimony_avatar);
            }
        });
    }

    public function getTestimony()
    {
        return self::all();
    }
}
