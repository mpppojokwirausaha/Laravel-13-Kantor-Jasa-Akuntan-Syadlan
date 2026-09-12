<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestimonySeeder extends Seeder
{
    public function run(): void
    {
        $testimonies = [
            [
                'testimony_name'    => 'Slamet Wibowo',
                'testimony_comment' => 'Saya sangat puas dengan layanan disini. Kualitas dan kinerjanya melebihi ekspektasi saya, dan sangat saya rekomendasikan kepada semua orang.',
                'testimony_start'   => 5,
                'testimony_avatar'  => 'testimonies/testimony-1.avif',
            ],
            [
                'testimony_name'    => 'Budi Santoso',
                'testimony_comment' => 'Layanan akuntansi dari Akuntan Sadlan sangat profesional dan membantu kami dalam pengelolaan keuangan. Sangat direkomendasikan untuk bisnis Anda.',
                'testimony_start'   => 5,
                'testimony_avatar'  => 'testimonies/testimony-2.avif',
            ],
            [
                'testimony_name'    => 'Rina Kartika',
                'testimony_comment' => 'Tim Akuntan Sadlan membantu merapikan pembukuan usaha kami dari nol. Prosesnya jelas dan selalu adam penjelasan di setiap laporan.',
                'testimony_start'   => 5,
                'testimony_avatar'  => 'testimonies/testimony-3.jpeg',
            ],
            [
                'testimony_name'    => 'Hendra Wijaya',
                'testimony_comment' => 'Konsultasi perpajakannya membantu bisnis kami tetap patuh regulasi tanpa harus pusing mengurusnya sendiri.',
                'testimony_start'   => 5,
                'testimony_avatar'  => 'testimonies/testimony-4.avif',
            ],
        ];

        foreach ($testimonies as $testimony) {
            Testimony::create([
                'uuid'              => (string) Str::uuid(),
                'testimony_avatar'  => $testimony['testimony_avatar'],
                'testimony_name'  => $testimony['testimony_name'],
                'testimony_comment' => $testimony['testimony_comment'],
                'testimony_start'   => $testimony['testimony_start'],
            ]);
        }
    }
}
