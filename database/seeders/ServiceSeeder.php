<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'service_title'     => 'Jasa Pembukuan',
                'service_desc'      => 'Pencatatan transaksi harian yang rapi dan konsisten menjadi dasar semua keputusan bisnis. Kami menyusun pembukuan usaha Anda sesuai standar akuntansi yang berlaku, siap diaudit dan siap dipakai untuk pengambilan keputusan.',
                'service_image'     => 'services/jasa=pembukuan.avif',
                'service_pain_poin' => 'Pencatatan jurnal harian dan rekonsiliasi kas/bank,Penyusunan laporan laba rugi dan neraca bulanan,Perapian pembukuan usaha yang belum tertata dari awal,Pendampingan sistem pencatatan digital',
            ],
            [
                'service_title'     => 'Jasa Perpajakan',
                'service_desc'      => 'Kewajiban perpajakan yang berubah-ubah sering membingungkan pelaku usaha. Kami mendampingi perhitungan, pelaporan, hingga pengarsipan dokumen pajak agar bisnis Anda tetap patuh tanpa harus mengurusnya sendiri.',
                'service_image'     => 'services/jasa-perpajakan.avif',
                'service_pain_poin' => 'Perhitungan dan pelaporan PPh serta PPN bulanan,Penyusunan SPT Tahunan Badan dan Orang Pribadi,Pendampingan saat pemeriksaan pajak,Konsultasi perencanaan pajak yang efisien dan sesuai aturan',
            ],
            [
                'service_title'     => 'Akuntansi Manajemen',
                'service_desc'      => 'Angka yang sama bisa dibaca berbeda tergantung kebutuhannya. Kami mengolah data keuangan menjadi laporan internal yang membantu pemilik usaha memahami biaya, margin, dan arah bisnis secara lebih jelas.',
                'service_image'     => 'services/jasa-consultasi-manager.avif',
                'service_pain_poin' => 'Analisis biaya dan penentuan harga pokok produk/jasa,Penyusunan anggaran dan proyeksi arus kas,Laporan kinerja per divisi atau lini usaha,Rekomendasi efisiensi biaya operasional',
            ],
            [
                'service_title'     => 'Konsultasi Manajemen',
                'service_desc'      => 'Setiap usaha punya tantangan yang berbeda. Kami mendampingi pemilik bisnis dalam menyusun strategi, mengevaluasi struktur organisasi, dan mengambil keputusan berbasis data, bukan sekadar intuisi.',
                'service_image'     => 'services/jasa-akuntansi-manageer.avif',
                'service_pain_poin' => 'Evaluasi kesehatan keuangan usaha,Penyusunan rencana bisnis dan strategi pertumbuhan,Pendampingan pengajuan pembiayaan/kredit usaha,Review struktur organisasi dan tata kelola',
            ],
            [
                'service_title'     => 'Jasa Sistem Teknologi Informasi',
                'service_desc'      => 'Pembukuan yang rapi butuh sistem yang mendukung. Kami membantu memilih dan menyiapkan perangkat lunak akuntansi yang sesuai skala usaha, lengkap dengan pelatihan penggunaannya untuk tim internal Anda.',
                'service_image'     => 'services/jasa-sistem-informasi-teknologi.avif',
                'service_pain_poin' => 'Pemilihan dan penerapan software akuntansi,Integrasi pencatatan penjualan dengan laporan keuangan,Pelatihan tim internal untuk input data mandiri,Pendampingan migrasi dari pencatatan manual ke digital',
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'uuid'              => (string) Str::uuid(),
                'service_title'     => $service['service_title'],
                'service_slug'      => Str::slug($service['service_title'], '-'),
                'service_desc'      => $service['service_desc'],
                'service_image'     => $service['service_image'],
                'service_pain_poin' => $service['service_pain_poin'],
            ]);
        }
    }
}
