@extends('front-end.layouts.main')
@section('content')
    <section class="relative text-paper pt-32 pb-16 md:pt-40 md:pb-20">
        <div class="absolute inset-0">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/Yg2yXzEMyoFr08V0/jasa-akuntansi-kja-slider-1-82V0cyUqpM4XtQW8.jpg"
                alt="Jasa akuntansi Konsultan Sadlan" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-ink/90 via-ink/70 to-ink/30"></div>
        </div>
        <div class="relative max-w-[1680px] mx-auto px-6 lg:px-8">
            <p class="text-paper/60 text-sm">
                <a href="{{ route('landingpage') }}" class="hover:text-brass transition-colors">Beranda</a>
                <span class="mx-2">/</span>
                <span class="text-brass">Layanan</span>
            </p>
            <h1 class="font-display text-4xl md:text-5xl font-semibold mt-5 max-w-2xl">
                Layanan Akuntansi &amp; Perpajakan
            </h1>
            <p class="mt-5 max-w-xl text-paper/80 text-lg leading-relaxed">
                Lima bidang layanan yang kami tangani langsung, mulai dari pembukuan harian hingga sistem informasi
                bisnis, untuk pelaku usaha di Purwakarta.
            </p>
        </div>
    </section>

    <!-- ================= DAFTAR LAYANAN ================= -->
    <section id="layanan" class="max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28">
        <div class="space-y-20 md:space-y-28">

            @foreach ($services as $index => $service)
                <article data-reveal
                    class="grid md:grid-cols-2 gap-12 md:gap-16 items-center opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
                    <div class="order-1 {{ $index % 2 !== 0 ? 'md:order-2' : '' }}">
                        <img src="{{ Storage::url($service->service_image) }}" alt="{{ $service->service_title }}"
                            class="w-full h-[280px] md:h-[380px] object-cover rounded-xl" />
                    </div>
                    <div class="order-2 {{ $index % 2 !== 0 ? 'md:order-1' : '' }}">
                        <span class="text-brass text-sm">Layanan {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h2 class="font-serif text-2xl md:text-3xl font-semibold mt-2">{{ $service->service_title }}</h2>
                        <p class="mt-5 text-slate leading-relaxed text-[15px]">
                            {{ $service->service_desc }}
                        </p>
                        <ul class="mt-6 space-y-3 text-[15px] text-ink">
                            @foreach (explode(',', $service->service_pain_poin) as $point)
                                <li class="flex gap-3"><span class="text-brass mt-1">—</span>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <!-- ================= ALUR KERJA ================= -->
    <section data-reveal
        class="bg-ledgerdark text-paper py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8">
            <h2
                class="inline-block font-serif text-3xl md:text-4xl font-semibold relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                Alur Kerja Sama
            </h2>
            <p class="mt-8 max-w-xl text-paper/75 leading-relaxed text-[15px]">
                Prosesnya sederhana, dari konsultasi awal hingga laporan rutin Anda terima setiap bulan.
            </p>

            <div class="mt-14 grid md:grid-cols-4 gap-px bg-paper/10">
                <div class="bg-ledgerdark p-8">
                    <span class="text-brass text-2xl">01</span>
                    <h3 class="font-serif text-lg font-semibold mt-4">Konsultasi Awal</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">Diskusi kebutuhan dan kondisi keuangan
                        usaha Anda saat ini.</p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <span class="text-brass text-2xl">02</span>
                    <h3 class="font-serif text-lg font-semibold mt-4">Penawaran Layanan</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">Kami susun paket layanan dan biaya
                        sesuai skala usaha.</p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <span class="text-brass text-2xl">03</span>
                    <h3 class="font-serif text-lg font-semibold mt-4">Pengerjaan</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">Tim kami mulai menangani pembukuan,
                        pajak, atau kebutuhan lain.</p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <span class="text-brass text-2xl">04</span>
                    <h3 class="font-serif text-lg font-semibold mt-4">Laporan Rutin</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">Anda menerima laporan berkala beserta
                        penjelasannya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section data-reveal
        class="max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-2xl">
            <h2
                class="inline-block font-serif text-3xl md:text-4xl font-semibold relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                Pertanyaan Umum
            </h2>

            <div class="mt-10 divide-y divide-ink/10">
                <details class="group py-5" open>
                    <summary
                        class="flex items-center justify-between cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        <span class="font-serif text-lg font-semibold pr-6">Apakah layanan bisa disesuaikan dengan
                            skala usaha kecil?</span>
                        <span
                            class="text-brass text-2xl leading-none transition-transform duration-[250ms] group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-3 text-slate text-[15px] leading-relaxed">
                        Bisa. Kami melayani mulai dari usaha perorangan hingga badan usaha, dengan paket pembukuan
                        dan pelaporan yang disesuaikan volume transaksi Anda.
                    </p>
                </details>
                <details class="group py-5">
                    <summary
                        class="flex items-center justify-between cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        <span class="font-serif text-lg font-semibold pr-6">Apakah data keuangan usaha kami
                            aman?</span>
                        <span
                            class="text-brass text-2xl leading-none transition-transform duration-[250ms] group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-3 text-slate text-[15px] leading-relaxed">
                        Kerahasiaan data klien adalah prioritas kami. Setiap dokumen dan laporan keuangan hanya
                        diakses oleh tim yang menangani akun Anda.
                    </p>
                </details>
                <details class="group py-5">
                    <summary
                        class="flex items-center justify-between cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        <span class="font-serif text-lg font-semibold pr-6">Berapa lama proses onboarding
                            pembukuan?</span>
                        <span
                            class="text-brass text-2xl leading-none transition-transform duration-[250ms] group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-3 text-slate text-[15px] leading-relaxed">
                        Umumnya 1–2 minggu setelah dokumen keuangan awal diserahkan, tergantung kondisi pembukuan
                        yang sudah ada sebelumnya.
                    </p>
                </details>
                <details class="group py-5">
                    <summary
                        class="flex items-center justify-between cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                        <span class="font-serif text-lg font-semibold pr-6">Apakah bisa hanya menggunakan satu
                            layanan saja, misalnya pajak?</span>
                        <span
                            class="text-brass text-2xl leading-none transition-transform duration-[250ms] group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-3 text-slate text-[15px] leading-relaxed">
                        Tentu. Kelima layanan kami dapat diambil secara terpisah maupun sebagai paket lengkap,
                        sesuai kebutuhan bisnis Anda.
                    </p>
                </details>
            </div>
        </div>
    </section>
    @include('front-end.layouts.partials.cta')
@endsection
