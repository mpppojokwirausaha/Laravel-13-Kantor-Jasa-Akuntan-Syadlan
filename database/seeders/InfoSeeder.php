<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    public function run(): void
    {
        Info::create([
            'no_whatsapp'    => env('NO_WHATSAPP'),
            'instagram'      => env('INSTAGRAM'),
            'tiktok'         => env('TIKTOK'),
            'address'        => env('ADDRESS'),
            'visi'           => env('VISI'),
            'misi'           => env('MISI'),
            'office_hours'   => env('OFFICE_HOURS'),
            'profile_desc'   => env('PROFILE_DESC'),
            'profile_image'  => env('PROFILE_IMAGE'),
            'founder_name'   => env('FOUNDER_NAME'),
            'founder_desc'   => env('FOUNDER_DESC'),
            'founder_image'  => env('FOUNDER_IMAGE')
        ]);
    }
}
