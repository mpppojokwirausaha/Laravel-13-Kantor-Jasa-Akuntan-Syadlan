@extends('front-end.layouts.main')
@section('content')
    <!-- ================= HERO ARTIKEL ================= -->
    <section class="relative text-paper pt-32 pb-16 md:pt-40 md:pb-20">
        <div class="absolute inset-0">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/Yg2yXzEMyoFr08V0/jasa-akuntansi-kja-slider-1-82V0cyUqpM4XtQW8.jpg"
                alt="{{ $article->article_title }}" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-ink/90 via-ink/70 to-ink/30"></div>
        </div>
        <div class="relative max-w-[1680px] mx-auto px-6 lg:px-8">
            <p class="text-paper/60 text-sm">
                <a href="{{ route('landingpage') }}" class="hover:text-brass transition-colors">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('article') }}" class="hover:text-brass transition-colors">Artikel</a>
                <span class="mx-2">/</span>
                <span class="text-brass">{{ $article->article_title }}</span>
            </p>
            <h1 class="font-display text-3xl md:text-5xl font-semibold mt-4 max-w-3xl leading-tight">
                {{ $article->article_title }}
            </h1>
            <p class="mt-6 text-paper/80 text-sm">
                {{ $article->created_at->translatedFormat('j F Y') }} · {{ $article->reading_time }} menit baca
            </p>
        </div>
    </section>

    <!-- ================= GAMBAR UTAMA ================= -->
    @if ($article->image_url)
        <section
            class="reveal opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none max-w-[1680px] mx-auto px-6 lg:px-8 -mt-10 md:-mt-14">
            <img src="{{ $article->image_url }}" alt="{{ $article->article_title }}"
                class="w-full h-[260px] md:h-[480px] object-cover rounded-xl shadow-lg" />
        </section>
    @endif

    <!-- ================= ISI ARTIKEL ================= -->
    <section
        class="reveal opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none max-w-[1680px] mx-auto px-6 lg:px-8 py-16 md:py-20">
        <div class="grid lg:grid-cols-[1fr_260px] gap-16">

            <article
                class="max-w-[680px]
                       [&>p]:text-ink [&>p]:text-[16.5px] [&>p]:leading-[1.8] [&>p]:mt-[1.4em]
                       [&>h2]:font-serif [&>h2]:text-2xl [&>h2]:font-semibold [&>h2]:mt-8 [&>h2]:mb-2.5
                       [&>ul]:mt-5 [&>ul]:pl-5 [&>ul]:list-disc [&>ul]:text-ink [&>ul]:text-[16.5px] [&>ul]:leading-[1.8]
                       [&>ul>li]:mt-2
                       [&>blockquote]:mt-6 [&>blockquote]:pl-5 [&>blockquote]:border-l-[3px] [&>blockquote]:border-brass
                       [&>blockquote]:text-slate [&>blockquote]:font-serif [&>blockquote]:text-lg [&>blockquote]:italic">
                {!! $article->article_content !!}
            </article>

            <!-- Sidebar -->
            <aside class="space-y-10">
                <div class="border border-ink/10 rounded-xl p-6">
                    <h3 class="font-serif text-lg font-semibold text-ink">Butuh pendampingan langsung?</h3>
                    <p class="mt-3 text-slate text-sm leading-relaxed">
                        Tim kami siap membantu kebutuhan pembukuan dan perpajakan usaha Anda.
                    </p>
                    <a href="https://wa.me/{{ $info->no_whatsapp }}?text={{ urlencode('Halo, saya dari website ' . config('app.name') . '. Saya ingin berkonsultasi mengenai finance. Mohon informasinya lebih lanjut. Terima kasih.' . "\n\n" . 'Domain: ' . config('app.url')) }}"
                        target="_blank"
                        class="mt-5 inline-block w-full text-center px-5 py-2.5 bg-brass text-ink text-sm font-medium rounded-full hover:bg-ink hover:text-paper transition-colors">
                        Konsultasi via WhatsApp
                    </a>
                </div>
            </aside>
        </div>
    </section>
@endsection
