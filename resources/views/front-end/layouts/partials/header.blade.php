<header id="site-header"
    class="group/header fixed top-0 inset-x-0 z-50 bg-transparent transition-colors duration-300 data-[scrolled]:bg-paper/95 data-[scrolled]:backdrop-blur-md data-[scrolled]:border-b data-[scrolled]:border-ink/10">
    <div class="max-w-[1680px] mx-auto px-6 lg:px-8 flex items-center justify-between h-16">
        <a href="{{ route('landingpage') }}" class="flex items-center gap-3">
            <span
                class="w-24 h-10 rounded-lg flex items-center justify-center overflow-hidden transition-colors duration-300 group-data-[scrolled]/header:bg-white">
                <img src="{{ asset('img/logo-web.webp') }}" alt="Logo" class="w-full h-full object-fit p-1">
            </span>
            <span
                class="hidden sm:inline-block font-display font-extrabold text-lg text-paper transition-colors duration-300 group-data-[scrolled]/header:text-ink">
                KJA SYADLAN
            </span>
        </a>

        <div class="flex items-center gap-10">
            <nav class="hidden md:flex items-center gap-8 text-base">
                <a href="{{ route('landingpage') }}" data-nav-link
                    class="font-semibold text-paper/90 pb-1 border-b border-transparent hover:border-current transition-colors duration-300 group-data-[scrolled]/header:text-ink">Beranda</a>
                <a href="{{ route('services') }}" data-nav-link
                    class="font-semibold text-paper/90 pb-1 border-b border-transparent hover:border-current transition-colors duration-300 group-data-[scrolled]/header:text-ink">Layanan</a>
                <a href="{{ route('about') }}" data-nav-link
                    class="font-semibold text-paper/90 pb-1 border-b border-transparent hover:border-current transition-colors duration-300 group-data-[scrolled]/header:text-ink">Tentang</a>
                <a href="{{ route('article') }}" data-nav-link
                    class="font-semibold text-paper/90 pb-1 border-b border-transparent hover:border-current transition-colors duration-300 group-data-[scrolled]/header:text-ink">Artikel</a>
                <a href="{{ route('filament.admin.auth.login') }}" data-nav-link
                    class="font-semibold text-paper/90 pb-1 border-b border-transparent hover:border-current transition-colors duration-300 group-data-[scrolled]/header:text-ink">Masuk</a>
            </nav>

            <a href="https://wa.me/{{ $info->no_whatsapp }}?text={{ urlencode('Halo, saya dari website ' . config('app.name') . '. Saya ingin berkonsultasi mengenai finance. Mohon informasinya lebih lanjut. Terima kasih.' . "\n\n" . 'Domain: ' . config('app.url')) }}"
                class="hidden md:inline-flex items-center justify-center text-base font-extrabold text-white px-5 py-2.5 rounded-full bg-brass shadow-lg transition-colors duration-300 hover:bg-paper hover:text-black group-data-[scrolled]/header:hover:bg-black group-data-[scrolled]/header:hover:text-white">
                Konsultasi
            </a>
        </div>
    </div>
</header>
