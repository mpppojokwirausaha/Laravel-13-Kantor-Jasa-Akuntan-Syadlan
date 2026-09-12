@extends('front-end.layouts.main')
@section('content')
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
                <span class="text-brass">Artikel</span>
            </p>
            <h1 class="font-display text-4xl md:text-5xl font-semibold mt-5 max-w-2xl">
                Artikel Konsultan Syadlan
            </h1>
            <p class="mt-5 max-w-xl text-paper/80 text-lg leading-relaxed">
                Catatan seputar pembukuan, perpajakan, dan pengelolaan keuangan untuk pelaku usaha di Purwakarta
            </p>
        </div>
    </section>

    <div class="flex flex-col">

        <!-- ================= SEARCH BAR (pindah ke atas saat mobile) ================= -->
        <section class="order-1 md:order-2 max-w-[1680px] mx-auto px-6 lg:px-8 pt-4 pb-4 md:pt-4 md:pb-0 w-full">
            <div class="flex justify-end">
                <div class="relative w-full max-w-md">
                    <input type="text" id="artikel-search-input" placeholder="Cari artikel..." autocomplete="off"
                        class="w-full rounded-full border-2 border-brass bg-white shadow-sm py-2.5 pl-11 pr-4 text-sm text-ink placeholder:text-slate/60 focus:outline-none focus:ring-2 focus:ring-brass/30 transition-all" />
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="absolute left-4 top-1/2 -translate-y-1/2 text-brass pointer-events-none">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                    <div id="artikel-search-loading" class="hidden absolute right-4 top-1/2 -translate-y-1/2">
                        <svg class="animate-spin h-4 w-4 text-brass" viewBox="0 0 24 24" fill="none">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= ARTIKEL UNGGULAN (TERBARU) ================= -->
        @if ($featured)
            <section data-reveal
                class="order-2 md:order-1 opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none max-w-[1680px] mx-auto px-6 lg:px-8 pt-4 md:pt-12 pb-4 w-full">
                <a href="{{ route('articleDetail', $featured->article_slug) }}"
                    class="post-card group grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                    <div class="overflow-hidden rounded-xl">
                        <img src="{{ $featured->image_url }}" alt="{{ $featured->article_title }}"
                            class="w-full h-[280px] md:h-[380px] object-cover transition-transform duration-500 group-hover:scale-[1.04]" />
                    </div>
                    <div>
                        <h2
                            class="mt-3 font-serif text-2xl md:text-3xl font-semibold text-ink group-hover:text-ledger transition-colors">
                            {{ $featured->article_title }}
                        </h2>
                        <p class="mt-4 text-slate leading-relaxed text-[15px]">
                            {{ $featured->excerpt }}
                        </p>
                        <p class="mt-5 text-sm text-slate/70">
                            {{ $featured->created_at->translatedFormat('j F Y') }} · {{ $featured->reading_time }} menit
                            baca
                        </p>
                    </div>
                </a>
            </section>
        @endif

    </div>

    <!-- ================= DAFTAR ARTIKEL (MULAI DARI ARTIKEL KE-2) ================= -->
    <section data-reveal
        class="opacity-0 translate-y-6 transition-all duration-700 ease-out motion-reduce:opacity-100 motion-reduce:translate-y-0 motion-reduce:transition-none max-w-[1680px] mx-auto px-6 lg:px-8 py-16 md:py-20">

        <div id="artikel-empty-state" class="{{ $articles->count() > 0 ? 'hidden' : '' }} text-center py-16">
            <p class="text-slate">Tidak ada artikel yang cocok dengan pencarianmu.</p>
        </div>

        <div id="artikel-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-14">
            @forelse($articles as $item)
                <a href="{{ route('articleDetail', $item->article_slug) }}" class="post-card group block">
                    <div class="overflow-hidden rounded-xl">
                        <img src="{{ $item->image_url }}" alt="{{ $item->article_title }}"
                            class="w-full h-[220px] object-cover transition-transform duration-500 group-hover:scale-[1.04]" />
                    </div>
                    <h3 class="mt-2 font-serif text-lg font-semibold text-ink group-hover:text-ledger transition-colors">
                        {{ $item->article_title }}
                    </h3>
                    <p class="mt-3 text-slate leading-relaxed text-[14px]">
                        {{ $item->excerpt }}
                    </p>
                    <p class="mt-4 text-sm text-slate/70">
                        {{ $item->created_at->translatedFormat('j F Y') }} · {{ $item->reading_time }} menit baca
                    </p>
                </a>
            @empty
            @endforelse
        </div>

        <!-- Pagination -->
        <div id="artikel-pagination" class="mt-16 flex items-center justify-center">
            {{ $articles->onEachSide(1)->links() }}
        </div>
    </section>
    @include('front-end.layouts.partials.cta')

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            (function() {
                const input = document.getElementById('artikel-search-input');
                const grid = document.getElementById('artikel-grid');
                const loading = document.getElementById('artikel-search-loading');
                const emptyState = document.getElementById('artikel-empty-state');
                const pagination = document.getElementById('artikel-pagination');

                let debounceTimer = null;
                let currentRequest = null;

                function formatTanggal(dateStr) {
                    return new Date(dateStr).toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });
                }

                function renderArtikel(items) {
                    if (!items || items.length === 0) {
                        grid.innerHTML = '';
                        emptyState.classList.remove('hidden');
                        return;
                    }
                    emptyState.classList.add('hidden');
                    grid.innerHTML = items.map(item => `
                    <a href="${item.url}" class="post-card group block">
                        <div class="overflow-hidden rounded-xl">
                            <img src="${item.image}" alt="${item.title}"
                                class="w-full h-[220px] object-cover transition-transform duration-500 group-hover:scale-[1.04]" />
                        </div>
                        <h3 class="mt-2 font-serif text-lg font-semibold text-ink group-hover:text-ledger transition-colors">
                            ${item.title}
                        </h3>
                        <p class="mt-3 text-slate leading-relaxed text-[14px]">
                            ${item.excerpt ?? ''}
                        </p>
                        <p class="mt-4 text-sm text-slate/70">${formatTanggal(item.published_at)} · ${item.reading_time ?? '5'} menit baca</p>
                    </a>
                `).join('');
                }

                function searchArtikel(query) {
                    if (currentRequest) currentRequest.cancel('canceled');
                    const cancelToken = axios.CancelToken;
                    const source = cancelToken.source();
                    currentRequest = source;

                    loading.classList.remove('hidden');

                    axios.get('{{ route('artikelSearch') }}', {
                            params: {
                                q: query
                            },
                            cancelToken: source.token,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            renderArtikel(response.data.data);
                            pagination.classList.toggle('hidden', query.trim().length > 0);
                        })
                        .catch(error => {
                            if (!axios.isCancel(error)) {
                                console.error('Gagal mengambil data artikel:', error);
                            }
                        })
                        .finally(() => {
                            loading.classList.add('hidden');
                        });
                }

                input.addEventListener('input', function(e) {
                    const query = e.target.value;
                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(() => searchArtikel(query), 350);
                });
            })();
        </script>
    @endpush
@endsection
