<!-- ================= CTA ================= -->
<section data-reveal
    class="relative opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none">
    <div class="absolute inset-0">
        <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/Yg2yXzEMyoFr08V0/alun-alun-Purwakarta-opacity-m5KnM2LrPkhRvG5g.png"
            alt="Alun-alun Purwakarta" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-ink/85"></div>
    </div>
    <div class="relative max-w-[1680px] mx-auto px-6 lg:px-8 py-20 md:py-28 text-paper text-center">
        <h2 class="font-serif text-3xl md:text-4xl font-semibold max-w-2xl mx-auto">
            {{ $title_cta }}
        </h2>
        <p class="mt-5 max-w-lg mx-auto text-paper/80 text-[15px] leading-relaxed">
            Konsultasikan kebutuhan pembukuan, pajak, atau manajemen bisnis Anda dengan tim kami di Purwakarta.
        </p>
        <a href="https://wa.me/{{ $info->no_whatsapp }}?text={{ urlencode('Halo, saya dari website ' . config('app.name') . '. Saya ingin berkonsultasi mengenai finance. Mohon informasinya lebih lanjut. Terima kasih.' . "\n\n" . 'Domain: ' . config('app.url')) }}"
            class="inline-block mt-8 px-7 py-3.5 bg-brass text-ink font-medium hover:bg-paper transition-colors">
            Hubungi Kami
        </a>
    </div>
</section>
