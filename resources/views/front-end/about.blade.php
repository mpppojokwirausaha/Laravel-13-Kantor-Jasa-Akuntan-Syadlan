@extends('front-end.layouts.main')
@section('content')
    <!-- ================= HERO / BREADCRUMB ================= -->
    <section class="relative text-paper pt-32 pb-16 md:pt-40 md:pb-20">
        <div class="absolute inset-0">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/Yg2yXzEMyoFr08V0/jasa-akuntansi-kja-slider-1-82V0cyUqpM4XtQW8.jpg"
                alt="Jasa akuntansi Konsultan Syadlan" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-ink/90 via-ink/70 to-ink/30"></div>
        </div>
        <div class="relative max-w-[1680px] mx-auto px-6 lg:px-8">
            <p class="text-paper/60 text-sm">
                <a href="{{ route('landingpage') }}" class="hover:text-brass transition-colors">Beranda</a>
                <span class="mx-2">/</span>
                <span class="text-brass">Tentang</span>
            </p>
            <h1 class="font-display text-4xl md:text-5xl font-semibold mt-5 max-w-2xl">
                Tentang Akuntan Syadlan
            </h1>
            <p class="mt-5 max-w-xl text-paper/80 text-lg leading-relaxed">
                Kantor jasa akuntan yang berdiri di Purwakarta untuk mendampingi pelaku usaha di Purwakarta
                mengelola keuangan bisnisnya dengan lebih tertata.
            </p>
        </div>
    </section>

    <!-- ================= PROFIL ================= -->
    <section id="profil" data-reveal
        class="max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="grid md:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="order-1 md:order-1">
                <img src="{{ Storage::url($info->profile_image) }}" alt="Profil Konsultan Syadlan"
                    class="w-full h-[300px] md:h-[480px] object-cover rounded-xl" />
            </div>
            <div class="order-2 md:order-2">
                <h2
                    class="inline-block font-serif text-3xl md:text-4xl font-semibold text-ink relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                    Profil Kami
                </h2>

                <div class="mt-8 space-y-5 text-slate leading-relaxed text-[15px] [&_p]:leading-relaxed">
                    {!! $info->profile_desc !!}
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PENDIRI ================= -->
    <section data-reveal
        class="bg-ledgerdark text-paper pt-20 pb-14 md:pt-28 md:pb-16 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="order-1">
                <img src="{{ Storage::url($info->founder_image) }}" alt="{{ $info->founder_name }}"
                    class="w-full aspect-[4/3] object-cover object-top rounded-xl" />
            </div>
            <div class="order-2">
                <h2
                    class="inline-block font-serif text-3xl md:text-4xl font-semibold text-paper relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                    Pendiri
                </h2>
                <p class="mt-8 font-serif text-xl text-paper">{{ $info->founder_name }}</p>

                <div class="mt-4 space-y-5 text-paper/75 leading-relaxed text-[15px] [&_p]:leading-relaxed">
                    {!! $info->founder_desc !!}
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PARTNER ================= -->
    <section data-reveal
        class="max-w-[1680px] mx-auto px-6 lg:px-8 pt-20 pb-20 md:pt-28 md:pb-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <h2
            class="inline-block font-serif text-3xl md:text-4xl font-semibold text-ink relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
            Partner
        </h2>
        <p class="mt-8 md:w-1/2 text-slate text-[15px] leading-relaxed">
            Selain pendiri, kantor kami didampingi oleh partner yang memimpin langsung bidang pembukuan,
            perpajakan, dan konsultasi manajemen — memastikan setiap layanan tetap ditangani oleh tenaga ahli di
            bidangnya masing-masing.
        </p>

        <!-- Mobile/Tablet: Swiper Carousel -->
        {{-- Mobile: Swiper --}}
        <div
            class="mt-10 md:hidden swiper partner-swiper
    [&_.swiper-pagination-bullet]:!bg-ink [&_.swiper-pagination-bullet]:!opacity-20
    [&_.swiper-pagination-bullet]:!w-2 [&_.swiper-pagination-bullet]:!h-2
    [&_.swiper-pagination-bullet]:!transition-all [&_.swiper-pagination-bullet]:!duration-300
    [&_.swiper-pagination-bullet-active]:!bg-brass [&_.swiper-pagination-bullet-active]:!opacity-100
    [&_.swiper-pagination-bullet-active]:!w-5 [&_.swiper-pagination-bullet-active]:!rounded-full">
            <div class="swiper-wrapper py-1">
                @foreach ($partners as $partner)
                    <div class="swiper-slide h-auto" style="width: 78%;">
                        <div class="h-full">
                            <img src="{{ Storage::url($partner->partner_image) }}" alt="Foto {{ $partner->partner_name }}"
                                class="w-32 h-32 object-cover rounded-full" />
                            <p class="mt-5 font-serif text-lg text-ink">{{ $partner->partner_name }}</p>
                            <p class="mt-1 text-brass text-sm font-medium">{{ $partner->partner_position }}</p>
                            <p class="mt-3 text-slate leading-relaxed text-[14px]">
                                {{ $partner->partner_desc }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination partner-swiper-pagination mt-6 !relative"></div>
        </div>

        {{-- Desktop: Grid --}}
        <div class="hidden md:grid md:grid-cols-4 gap-10 mt-14">
            @foreach ($partners as $partner)
                <div>
                    <img src="{{ Storage::url($partner->partner_image) }}" alt="Foto {{ $partner->partner_name }}"
                        class="w-32 h-32 object-cover rounded-full" />
                    <p class="mt-5 font-serif text-lg text-ink">{{ $partner->partner_name }}</p>
                    <p class="mt-1 text-brass text-sm font-medium">{{ $partner->partner_position }}</p>
                    <p class="mt-3 text-slate leading-relaxed text-[14px]">
                        {{ $partner->partner_desc }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ================= NILAI-NILAI ================= -->
    <section data-reveal
        class="bg-ledgerdark text-paper py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8">
            <h2
                class="inline-block font-serif text-3xl md:text-4xl font-semibold relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                Nilai yang Kami Pegang
            </h2>
            <p class="mt-8 max-w-xl text-paper/75 text-[15px] leading-relaxed">
                Nilai-nilai ini yang menjadi dasar setiap laporan dan konsultasi yang kami berikan kepada klien.
            </p>

            <div class="mt-14 grid md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-paper/15">
                <div class="py-10 md:px-8">
                    <h3 class="font-serif text-xl font-semibold">Profesional</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Setiap pekerjaan ditangani sesuai standar akuntansi dan kode etik profesi yang berlaku.
                    </p>
                </div>
                <div class="py-10 md:px-8">
                    <h3 class="font-serif text-xl font-semibold">Jujur &amp; Transparan</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Kami menjelaskan setiap angka dalam laporan dengan bahasa yang mudah dipahami klien, bukan
                        hanya istilah akuntansi.
                    </p>
                </div>
                <div class="py-10 md:px-8">
                    <h3 class="font-serif text-xl font-semibold">Berorientasi Klien</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Layanan disesuaikan dengan kondisi dan skala usaha masing-masing klien, bukan solusi yang
                        dipukul rata.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= VISI & MISI ================= -->
    <section data-reveal
        class="py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-14 md:gap-20">
                <div>
                    <h2 class="font-serif text-2xl md:text-3xl font-semibold text-brass">Visi</h2>
                    <p class="mt-6 text-slate leading-relaxed text-[15px]">
                        {{ $info->visi }}
                    </p>
                </div>
                <div>
                    <h2 class="font-serif text-2xl md:text-3xl font-semibold text-brass">Misi</h2>
                    <ul class="mt-6 space-y-3 text-slate text-[15px] leading-relaxed">
                        @foreach (explode(',', $info->misi) as $point)
                            <li class="flex gap-3"><span class="text-brass mt-1">—</span>{{ trim($point) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= KENAPA JASA KONSULTAN ================= -->
    <section data-reveal
        class="bg-ledgerdark text-paper py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8">
            <div class="max-w-xl">
                <h2
                    class="inline-block font-serif text-3xl md:text-4xl font-semibold relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                    Kenapa Memilih Jasa Kantor Akuntan Kami?
                </h2>
                <p class="mt-8 text-paper/75 leading-relaxed text-[15px]">
                    Alasan pelaku usaha di Purwakarta mempercayakan pembukuan dan perpajakannya kepada
                    kami.
                </p>
            </div>

            <div class="mt-14 grid md:grid-cols-2 gap-px bg-paper/10">
                <div class="bg-ledgerdark p-8">
                    <h3 class="font-serif text-xl font-semibold">Berizin Resmi</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Berizin resmi dari Kementerian Keuangan — kami adalah KJA terdaftar dan berizin resmi, yang
                        menjamin legalitas dan profesionalisme layanan.
                    </p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <h3 class="font-serif text-xl font-semibold">Berpengalaman dan Bersertifikat Profesional</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Tim kami terdiri dari akuntan yang memiliki sertifikasi seperti Akuntan Profesional (Ak.),
                        Chartered Accountant (CA), ASEAN CPA, dan lainnya.
                    </p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <h3 class="font-serif text-xl font-semibold">Solusi Praktis</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Kami menyediakan solusi yang praktis dan aplikatif, sesuai dengan tantangan bisnis di era
                        saat ini.
                    </p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <h3 class="font-serif text-xl font-semibold">Layanan Lengkap dan Terintegrasi</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Meliputi jasa pembukuan, penyusunan laporan keuangan, perpajakan, audit internal, sistem
                        informasi akuntansi, hingga konsultasi manajemen.
                    </p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <h3 class="font-serif text-xl font-semibold">Pendekatan Personal dan Solutif</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Setiap klien kami perlakukan secara personal, dengan fokus pada solusi yang sesuai dengan
                        kondisi usaha masing-masing.
                    </p>
                </div>
                <div class="bg-ledgerdark p-8">
                    <h3 class="font-serif text-xl font-semibold">Dukungan Teknologi dan Digitalisasi</h3>
                    <p class="mt-3 text-paper/70 text-[15px] leading-relaxed">
                        Kami menggunakan software akuntansi terpercaya serta memberikan pelatihan agar klien dapat
                        mengakses laporan secara real-time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= LEGALITAS ================= -->
    <section data-reveal
        class="py-20 md:py-28 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8 max-w-2xl">
            <h2
                class="inline-block font-serif text-3xl md:text-4xl font-semibold relative border-b border-current pb-1.5 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-12 after:h-px after:bg-current">
                Legalitas
            </h2>
            <p class="mt-8 text-slate leading-relaxed text-[15px]">
                Konsultan Syadlan beroperasi sebagai Kantor Jasa Akuntansi (KJA) yang dipimpin oleh akuntan
                bergelar Ak., CA. Seluruh layanan pembukuan, pelaporan keuangan, dan konsultasi perpajakan
                dikerjakan sesuai standar dan kode etik profesi akuntan yang berlaku di Indonesia.
            </p>
        </div>
    </section>
    @include('front-end.layouts.partials.cta')
@endsection
