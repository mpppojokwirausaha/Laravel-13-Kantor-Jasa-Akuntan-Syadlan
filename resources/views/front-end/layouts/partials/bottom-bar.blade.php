<nav
    class="md:hidden fixed inset-x-0 bottom-0 z-50 bg-paper border-t border-ink/10 shadow-[0_-8px_24px_rgba(31,42,36,0.08)] pb-[env(safe-area-inset-bottom,0px)]">
    <div class="grid grid-cols-4 h-[68px]">
        <a href="{{ route('landingpage') }}" @if (request()->routeIs('landingpage')) data-active @endif
            class="group relative flex flex-col items-center justify-center gap-1 text-ink/50 transition-colors duration-300 data-[active]:text-brass py-2">
            <span
                class="absolute inset-x-3 inset-y-1.5 rounded-2xl bg-brass/10 scale-90 opacity-0 transition-all duration-300 group-data-[active]:scale-100 group-data-[active]:opacity-100">
            </span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round"
                class="relative w-5 h-5 transition-transform duration-300 group-data-[active]:-translate-y-0.5">
                <path d="M3 10.5 12 3l9 7.5" />
                <path d="M5 9.5V21h14V9.5" />
            </svg>
            <span class="relative text-[10.5px] font-medium">Beranda</span>
        </a>

        <a href="{{ route('services') }}" @if (request()->routeIs('services')) data-active @endif
            class="group relative flex flex-col items-center justify-center gap-1 text-ink/50 transition-colors duration-300 data-[active]:text-brass py-2">
            <span
                class="absolute inset-x-3 inset-y-1.5 rounded-2xl bg-brass/10 scale-90 opacity-0 transition-all duration-300 group-data-[active]:scale-100 group-data-[active]:opacity-100">
            </span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round"
                class="relative w-5 h-5 transition-transform duration-300 group-data-[active]:-translate-y-0.5">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <path d="M8 9h8M8 13h8M8 17h5" />
            </svg>
            <span class="relative text-[10.5px] font-medium">Layanan</span>
        </a>

        <a href="{{ route('about') }}" @if (request()->routeIs('about')) data-active @endif
            class="group relative flex flex-col items-center justify-center gap-1 text-ink/50 transition-colors duration-300 data-[active]:text-brass py-2">
            <span
                class="absolute inset-x-3 inset-y-1.5 rounded-2xl bg-brass/10 scale-90 opacity-0 transition-all duration-300 group-data-[active]:scale-100 group-data-[active]:opacity-100">
            </span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round"
                class="relative w-5 h-5 transition-transform duration-300 group-data-[active]:-translate-y-0.5">
                <circle cx="12" cy="12" r="9" />
                <path d="M12 8h.01M11 12h1v5h1" />
            </svg>
            <span class="relative text-[10.5px] font-medium">Tentang</span>
        </a>

        <a href="{{ route('article') }}" @if (request()->routeIs('article')) data-active @endif
            class="group relative flex flex-col items-center justify-center gap-1 text-ink/50 transition-colors duration-300 data-[active]:text-brass py-2">
            <span
                class="absolute inset-x-3 inset-y-1.5 rounded-2xl bg-brass/10 scale-90 opacity-0 transition-all duration-300 group-data-[active]:scale-100 group-data-[active]:opacity-100">
            </span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round"
                class="relative w-5 h-5 transition-transform duration-300 group-data-[active]:-translate-y-0.5">
                <path d="M4 4h13l3 3v13H4z" />
                <path d="M8 9h9M8 13h9M8 17h5" />
            </svg>
            <span class="relative text-[10.5px] font-medium">Artikel</span>
        </a>
    </div>
</nav>
