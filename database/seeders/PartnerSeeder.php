<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name'     => 'Ihsan Nasihin, S.Ak.,M.Ak.,Ak.,CA.,CTA',
                'position' => 'Konsultan Pajak',
                'desc'     => 'Berpengalaman menangani perencanaan dan pelaporan pajak untuk berbagai skala usaha, mulai dari UMKM hingga badan usaha menengah.',
                'image'    => 'partners/ihsan.avif',
            ],
            [
                'name'     => 'Vita Nurhayati, S.Ak., Ak., CA',
                'position' => 'Konsultan Pajak',
                'desc'     => 'Membantu klien menyusun strategi perpajakan, menjaga kepatuhan laporan, serta mendampingi proses pemeriksaan pajak.',
                'image'    => 'partners/vita.avif',
            ],
            [
                'name'     => 'Fuzi Fitria',
                'position' => 'Digital Marketing',
                'desc'     => 'Mengelola konten media sosial dan kampanye digital untuk meningkatkan jangkauan serta citra brand klien.',
                'image'    => 'partners/partner-3',
            ],
            [
                'name'     => 'Ines Mufida',
                'position' => 'Editorial',
                'desc'     => 'Bertanggung jawab menulis dan menyunting konten agar informasi tersampaikan akurat, rapi, dan mudah dipahami.',
                'image'    => 'partners/partner-4',
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create([
                'uuid'             => (string) Str::uuid(),
                'partner_name'     => $partner['name'],
                'partner_position' => $partner['position'],
                'partner_desc'     => $partner['desc'],
                'partner_image'    => $partner['image'],
            ]);
        }
    }
}
