<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'partner_name',
        'partner_position',
        'partner_desc',
        'partner_image',
    ];

    protected static function booted()
    {
        static::creating(function ($partner) {
            if (empty($partner->uuid)) {
                $partner->uuid = (string) Str::uuid();
            }
        });

        static::updating(function ($partner) {
            if ($partner->isDirty('partner_image')) {
                $oldImage = $partner->getOriginal('partner_image');

                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleting(function ($partner) {
            if ($partner->partner_image && Storage::disk('public')->exists($partner->partner_image)) {
                Storage::disk('public')->delete($partner->partner_image);
            }
        });
    }

    public function getPartner()
    {
        return self::all();
    }
}
