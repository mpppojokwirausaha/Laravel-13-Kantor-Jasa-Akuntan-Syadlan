@extends('front-end.layouts.main')
@section('content')
    <section id="beranda" class="relative">
        <div class="absolute inset-0">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/Yg2yXzEMyoFr08V0/jasa-akuntansi-kja-slider-1-82V0cyUqpM4XtQW8.jpg"
                alt="Jasa akuntansi Akuntant Sadlan" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-ink/90 via-ink/70 to-ink/30"></div>
        </div>

        <div class="relative max-w-[1680px] mx-auto px-6 lg:px-8 pt-24 pb-32 md:pt-36 md:pb-44">
            <div class="max-w-xl">
                <p class="text-brass text-sm tracking-wide mb-4">Kota Purwakarta, Jawa Barat</p>
                <h1 class="font-display text-4xl md:text-5xl font-bold text-paper leading-tight tracking-tight">
                    Kantor Jasa Akuntan Syadlan
                </h1>
                <p class="mt-5 text-paper/85 text-lg leading-relaxed">
                    Kami menyediakan berbagai layanan akuntansi untuk kebutuhan bisnis Anda, dikerjakan oleh tenaga
                    profesional dan berpengalaman.
                </p>
                <a href="https://wa.me/{{ $info->no_whatsapp }}?text={{ urlencode('Halo, saya dari website ' . config('app.name') . '. Saya ingin berkonsultasi mengenai finance. Mohon informasinya lebih lanjut. Terima kasih.' . "\n\n" . 'Domain: ' . config('app.url')) }}"
                    target="_blank"
                    class="inline-block mt-8 px-7 py-3.5 bg-brass font-extrabold text-white hover:bg-paper hover:text-black transition-colors">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- ================= FEATURE STRIP ================= -->
    <section data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none border-b border-ink/10">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8 py-8 md:py-0">

            <!-- Mobile/Tablet: Swiper Carousel -->
            <div
                class="md:hidden swiper feature-swiper
            [&_.swiper-pagination-bullet]:h-2 [&_.swiper-pagination-bullet]:w-2 [&_.swiper-pagination-bullet]:bg-ink [&_.swiper-pagination-bullet]:opacity-20 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300
            [&_.swiper-pagination-bullet-active]:w-5 [&_.swiper-pagination-bullet-active]:rounded-full [&_.swiper-pagination-bullet-active]:bg-brass [&_.swiper-pagination-bullet-active]:opacity-100">
                <div class="swiper-wrapper py-1">
                    <div class="swiper-slide h-auto">
                        <div class="h-full bg-white border border-ink/10 rounded-xl p-7">
                            <span class="text-ledger text-2xl">01</span>
                            <p class="mt-3 text-[15px] leading-relaxed">Pembukuan dan laporan keuangan yang akurat</p>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="h-full bg-white border border-ink/10 rounded-xl p-7">
                            <span class="text-ledger text-2xl">02</span>
                            <p class="mt-3 text-[15px] leading-relaxed">Konsultasi manajemen untuk pengambilan
                                keputusan yang tepat</p>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="h-full bg-white border border-ink/10 rounded-xl p-7">
                            <span class="text-ledger text-2xl">03</span>
                            <p class="mt-3 text-[15px] leading-relaxed">Pendampingan laporan keuangan sesuai regulasi
                                terbaru</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-6 !relative"></div>
            </div>

            <!-- Desktop: Grid -->
            <div class="hidden md:grid md:grid-cols-3 divide-x divide-ink/10">
                <div class="py-10 md:px-8 first:pl-0">
                    <span class="text-ledger text-2xl">01</span>
                    <p class="mt-3 text-[15px] leading-relaxed">Pembukuan dan laporan keuangan yang akurat</p>
                </div>
                <div class="py-10 md:px-8">
                    <span class="text-ledger text-2xl">02</span>
                    <p class="mt-3 text-[15px] leading-relaxed">Konsultasi manajemen untuk pengambilan keputusan yang
                        tepat</p>
                </div>
                <div class="py-10 md:px-8">
                    <span class="text-ledger text-2xl">03</span>
                    <p class="mt-3 text-[15px] leading-relaxed">Pendampingan laporan keuangan sesuai regulasi terbaru
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= TENTANG ================= -->
    <section id="tentang" data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28">
        <div class="grid md:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="order-1 md:order-1">
                <img src="{{ Storage::url($info->profile_image) }}" alt="Profil Konsultan Syadlan"
                    class="w-full h-[300px] md:h-[480px] object-cover rounded-xl" />
            </div>
            <div class="order-2 md:order-2">
                <h2
                    class="relative inline-block border-b border-current pb-1.5 font-serif text-3xl md:text-4xl font-semibold text-ink after:absolute after:-bottom-1 after:left-0 after:h-px after:w-12 after:bg-current">
                    Tentang Kami
                </h2>
                <p class="mt-8 text-slate leading-relaxed text-[15px]">
                    Kami adalah kantor jasa akuntan di Purwakarrta menawarkan berbagai layanan akuntansi, termasuk
                    pembukuan, laporan keuangan, manajemen, dan konsultasi perpajakan.
                </p>

                <blockquote class="mt-10 border-l-2 border-brass pl-6">
                    <p class="font-serif text-xl text-ink leading-snug">
                        "Layanan jasa akuntan yang sangat profesional dan perpercaya"
                    </p>
                    <cite class="not-italic block mt-3 text-sm text-slate">{{ $info->founder_name }}</cite>
                </blockquote>

                <a href="{{ route('about') }}"
                    class="inline-block mt-10 text-sm text-ledger border-b border-ledger pb-0.5 hover:text-brass hover:border-brass transition-colors">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </section>

    <!-- ================= LAYANAN ================= -->
    <section id="layanan" data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none bg-ledgerdark text-paper py-20 md:py-28">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8">
            <div class="max-w-xl">
                <h2
                    class="relative inline-block border-b border-current pb-1.5 font-serif text-3xl md:text-4xl font-semibold after:absolute after:-bottom-1 after:left-0 after:h-px after:w-12 after:bg-current">
                    Jasa Akuntansi
                </h2>
                <p class="mt-8 text-paper/75 leading-relaxed text-[15px]">
                    Kami menyediakan beragam jasa akuntansi untuk mendukung kebutuhan bisnis Anda dengan
                    profesionalisme.
                </p>
            </div>

            <div class="mt-14 grid md:grid-cols-3 gap-px bg-paper/10">
                @foreach ($services as $service)
                    <article class="bg-ledgerdark p-8">
                        <img src="{{ Storage::url($service->service_image) }}" alt="{{ $service->service_title }}"
                            class="w-full h-52 object-cover rounded-xl" />
                        <h3 class="font-serif text-xl font-semibold mt-6">{{ $service->service_title }}</h3>
                        <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                            {{ Str::limit($service->service_desc, 100) }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= ULASAN ================= -->
    <section data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28">
        <h2
            class="relative inline-block border-b border-current pb-1.5 font-serif text-3xl md:text-4xl font-semibold after:absolute after:-bottom-1 after:left-0 after:h-px after:w-12 after:bg-current">
            Ulasan Pelanggan
        </h2>
        <p class="mt-8 max-w-xl text-slate text-[15px] leading-relaxed">
            Temukan apa yang klien kami pikirkan tentang layanan Konsu ltan Sadlan.
        </p>

        <div class="mt-14">
            <div
                class="swiper testimonial-swiper
        [&_.swiper-pagination-bullet]:h-2 [&_.swiper-pagination-bullet]:w-2 [&_.swiper-pagination-bullet]:bg-ink [&_.swiper-pagination-bullet]:opacity-20 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300
        [&_.swiper-pagination-bullet-active]:w-5 [&_.swiper-pagination-bullet-active]:rounded-full [&_.swiper-pagination-bullet-active]:bg-brass [&_.swiper-pagination-bullet-active]:opacity-100">
                <div class="swiper-wrapper py-2">

                    @foreach ($testimonies as $testimony)
                        <div class="swiper-slide h-auto">
                            <div class="h-full bg-white border border-ink/10 rounded-xl p-7">
                                <div class="flex items-start gap-4">
                                    <img src="{{ Storage::url($testimony->testimony_avatar) }}"
                                        alt="{{ $testimony->testimony_name }}"
                                        class="w-12 h-12 rounded-full object-cover flex-shrink-0" />
                                    <div>
                                        <p class="font-serif font-semibold text-ink">{{ $testimony->testimony_name }}</p>
                                        <p class="text-brass tracking-widest text-xs mt-0.5">
                                            {{ str_repeat('★', $testimony->testimony_start) }}</p>
                                    </div>
                                </div>
                                <p class="mt-5 text-slate text-[15px] leading-relaxed">
                                    {{ $testimony->testimony_comment }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination mt-8 !relative"></div>
            </div>
        </div>
    </section>

    <!-- ================= KLIEN & MITRA ================= -->
    <section data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none py-20 md:py-28 bg-white border-y border-ink/10">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8">
            <div class="text-center mb-14">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-brass text-ink rounded-lg flex items-center justify-center">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8.5 8.5 4 13l4.5 4.5M15.5 8.5 20 13l-4.5 4.5M13.5 4.5l-3 15" />
                        </svg>
                    </div>
                    <h2 class="font-serif text-2xl md:text-3xl font-semibold text-ink">
                        Klien Kami
                    </h2>
                </div>
                <p class="text-slate text-[15px]">Konsultan | Dipercaya oleh berbagai usaha di Purwakarta
                    dan sekitarnya</p>
            </div>

            <div class="space-y-6 overflow-hidden">
                @php
                    $half = ceil($clients->count() / 2);
                    $rowOne = $clients->take($half);
                    $rowTwo = $clients->skip($half);
                @endphp

                {{-- Baris 1: scroll ke kiri --}}
                <div class="overflow-hidden relative">
                    <div class="w-max flex animate-scroll-left hover:[animation-play-state:paused]">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="flex" @if ($i === 1) aria-hidden="true" @endif>
                                @foreach ($rowOne as $client)
                                    <a href="{{ $client->ourClient_link }}" target="_blank" rel="noopener noreferrer"
                                        class="flex-shrink-0 w-[220px] mx-3 flex flex-col items-center justify-center gap-3 rounded-xl border border-ink/10 bg-paper px-4 py-6 text-center transition-[box-shadow,transform,border-color] duration-300 hover:-translate-y-0.5 hover:border-brass/40 hover:shadow-[0_12px_28px_rgba(31,42,36,0.12)]">
                                        <span
                                            class="flex h-12 w-12 items-center justify-center rounded-full bg-brass/[0.12] text-brass overflow-hidden">
                                            <img src="{{ Storage::url($client->ourClient_image) }}"
                                                alt="{{ $client->ourClient_title }}"
                                                class="h-full w-full object-cover" />
                                        </span>
                                        <p class="font-serif font-semibold text-ink text-sm">
                                            {{ $client->ourClient_title }}</p>
                                    </a>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- Baris 2: scroll ke kanan --}}
                <div class="overflow-hidden relative">
                    <div class="w-max flex animate-scroll-right hover:[animation-play-state:paused]">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="flex" @if ($i === 1) aria-hidden="true" @endif>
                                @foreach ($rowTwo as $client)
                                    <a href="{{ $client->ourClient_link }}" target="_blank" rel="noopener noreferrer"
                                        class="flex-shrink-0 w-[220px] mx-3 flex flex-col items-center justify-center gap-3 rounded-xl border border-ink/10 bg-paper px-4 py-6 text-center transition-[box-shadow,transform,border-color] duration-300 hover:-translate-y-0.5 hover:border-brass/40 hover:shadow-[0_12px_28px_rgba(31,42,36,0.12)]">
                                        <span
                                            class="flex h-12 w-12 items-center justify-center rounded-full bg-brass/[0.12] text-brass overflow-hidden">
                                            <img src="{{ Storage::url($client->ourClient_image) }}"
                                                alt="{{ $client->ourClient_title }}"
                                                class="h-full w-full object-cover" />
                                        </span>
                                        <p class="font-serif font-semibold text-ink text-sm">
                                            {{ $client->ourClient_title }}</p>
                                    </a>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <p class="text-center mt-10 text-xs text-slate">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline-block -mt-0.5 mr-1">
                    <path d="M12 3v4M5 8l3 3M19 8l-3 3M4 21h16" />
                </svg>
                Hover untuk pause
            </p>
        </div>
    </section>

    <!-- ================= LOKASI ================= -->
    <section id="lokasi" data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none relative">
        <div class="absolute inset-0">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/Yg2yXzEMyoFr08V0/alun-alun-Purwakarta-opacity-m5KnM2LrPkhRvG5g.png"
                alt="Alun-alun Purwakarta" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-ink/85"></div>
        </div>

        <div class="relative max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28 text-paper">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-start">
                <!-- Kolom kiri: Judul, deskripsi, Alamat & Jam Operasional -->
                <div>
                    <h2
                        class="relative inline-block border-b border-current pb-1.5 font-serif text-3xl md:text-4xl font-semibold after:absolute after:-bottom-1 after:left-0 after:h-px after:w-12 after:bg-current">
                        Lokasi Kami
                    </h2>
                    <p class="mt-8 max-w-lg text-paper/80 text-[15px] leading-relaxed">
                        Kantor kami terletak di Kota Purwakarta, siap memberikan layanan akuntansi profesional untuk
                        kebutuhan bisnis Anda. Klik peta untuk membuka rute di Google Maps.
                    </p>

                    <div class="mt-12 grid sm:grid-cols-2 gap-10">
                        <div>
                            <h3 class="font-serif text-lg font-semibold text-brass">Alamat</h3>
                            <p class="mt-3 text-paper/85 text-[15px] leading-relaxed">
                                {{ $info->address }}
                            </p>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-semibold text-brass">Jam Operasional</h3>
                            <p class="mt-3 text-paper/85 text-[15px] leading-relaxed">
                                {{ $info->office_hours }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kolom kanan: Peta -->
                <a href="https://www.google.com/maps/search/?api=1&query=Perum+Griya+Pasekaran+2+Blok+H+81+Purwakarta+Jawa+Tengah"
                    target="_blank" rel="noopener"
                    class="group/map relative block h-full overflow-hidden rounded-2xl no-underline shadow-[0_20px_50px_rgba(31,42,36,0.22)]"
                    aria-label="Buka lokasi Akuntant Sadlan di Google Maps">
                    <div
                        class="relative h-full after:content-[''] after:pointer-events-none after:absolute after:inset-0 after:[background:linear-gradient(0deg,rgba(31,42,36,0.6)_0%,rgba(31,42,36,0.1)_35%,rgba(31,42,36,0)_60%)] lg:after:[background:linear-gradient(90deg,rgba(31,42,36,0.68)_0%,rgba(31,42,36,0.18)_38%,rgba(31,42,36,0)_60%)]">
                        <iframe
                            src="https://maps.google.com/maps?q=Perum+Griya+Pasekaran+2+Blok+H+81+Purwakarta+Jawa+Tengah&z=16&output=embed"
                            class="w-full h-full min-h-[320px] aspect-[4/3] sm:aspect-[16/10] lg:aspect-auto border-0 pointer-events-none [filter:grayscale(0.35)_sepia(0.12)_contrast(1.02)] transition-[filter,transform] duration-500 group-hover/map:[filter:grayscale(0)_sepia(0)] group-hover/map:scale-[1.03]"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="Lokasi Akuntant Sadlan di Google Maps"></iframe>

                        <span
                            class="absolute right-4 top-4 z-[3] inline-flex items-center gap-1.5 rounded-full bg-paper/95 px-3.5 py-2 text-xs font-semibold text-ink shadow-[0_4px_16px_rgba(31,42,36,0.15)]">
                            <span class="h-[7px] w-[7px] rounded-full bg-ledger animate-dot-ping"></span> Lokasi Aktif
                        </span>

                        <span
                            class="pointer-events-none absolute left-1/2 top-1/2 z-[2] flex -translate-x-1/2 -translate-y-full flex-col items-center">
                            <span
                                class="flex h-11 w-11 -rotate-45 items-center justify-center rounded-[50%_50%_50%_0] bg-brass shadow-[0_8px_20px_rgba(176,134,40,0.45)] animate-pin-bounce">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" class="rotate-45 text-ink">
                                    <path d="M12 21s-7-6.1-7-11a7 7 0 0 1 14 0c0 4.9-7 11-7 11Z" />
                                    <circle cx="12" cy="10" r="2.5" />
                                </svg>
                            </span>
                            <span class="mt-1.5 h-1.5 w-[18px] rounded-full bg-ink/35 blur-[1px]"></span>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
