<?php

namespace Database\Seeders;

use App\Models\OurClient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OurClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'title' => 'NUPARIS',
                'link'  => 'https://www.nuparis.id',
                'image' => 'clients/nuparis.png',
            ],
            [
                'title' => 'PT Arafah Medilab',
                'link'  => '#',
                'image' => 'clients/arafah.jpeg',
            ],
            [
                'title' => 'PT. APRILIA MAJU SEJAHTERA',
                'link'  => 'https://companieshouse.id/aprilia-maju-sejahtera',
                'image' => 'clients/aprilia-maju-sejahtera.jpeg',
            ],
            [
                'title' => 'PT SODIK PUTRA CEMERLANG',
                'link'  => '#',
                'image' => 'clients/sodik.jpeg',
            ],
            [
                'title' => 'PT ARKA PUTRA PRIMA',
                'link'  => '#',
                'image' => 'clients/arka-putra-prima.jpeg',
            ],
            [
                'title' => 'CV ERISKA SEJAHTERA ABADI',
                'link'  => '#',
                'image' => 'clients/eriska.jpeg',
            ],
            [
                'title' => 'CV Mitra Langganan Pratama',
                'link'  => '#',
                'image' => 'clients/mitra-langganan=pertama.jpeg',
            ],
            [
                'title' => 'CV AZTEK KARYA PRATAMA',
                'link'  => '#',
                'image' => 'clients/aztek-karya-pratama.jpeg',
            ],
            [
                'title' => 'RAJA PRIMA ENERGI',
                'link'  => '#',
                'image' => 'clients/raja-prima.jpeg',
            ],
            [
                'title' => 'FIRMAS GLOBAL SOLUSI',
                'link'  => '#',
                'image' => 'clients/fgs.jpeg',
            ],
            [
                'title' => 'PUJATERA GARAGE',
                'link'  => '#',
                'image' => 'clients/pujatera.jpeg',
            ],
            [
                'title' => 'PT. BISMILLAH KUN FAYAKUN',
                'link'  => '#',
                'image' => 'clients/bkf.jpeg',
            ],
        ];

        foreach ($clients as $client) {
            OurClient::create([
                'uuid'            => (string) Str::uuid(),
                'ourClient_title' => $client['title'],
                'ourClient_link'  => $client['link'],
                'ourClient_image' => $client['image'],
            ]);
        }
    }
}
