<!-- ================= FLOATING CHAT (terpisah dari bottom nav) ================= -->
<div class="group/chat fixed z-[60] flex flex-col items-end gap-2.5 bottom-[calc(68px+env(safe-area-inset-bottom,0px)+16px)] right-5 md:bottom-8 md:right-8"
    id="floatingChat">
    <div
        class="pointer-events-none whitespace-nowrap rounded-[10px_10px_2px_10px] bg-ink px-3.5 py-2 text-[12.5px] font-medium text-paper shadow-[0_8px_20px_rgba(31,42,36,0.18)] opacity-0 translate-x-3 scale-95 transition-all duration-300 [transition-timing-function:cubic-bezier(0.34,1.56,0.64,1)] group-hover/chat:opacity-100 group-hover/chat:translate-x-0 group-hover/chat:scale-100 group-focus-within/chat:opacity-100 group-focus-within/chat:translate-x-0 group-focus-within/chat:scale-100">
        Hubungi kami via WhatsApp</div>
    <button id="chatToggle" aria-label="Buka chat WhatsApp"
        class="relative flex h-[52px] w-[52px] items-center justify-center rounded-full border-0 bg-brass text-white shadow-[0_8px_24px_rgba(176,134,40,0.4)] transition-[transform,box-shadow] duration-300 [transition-timing-function:cubic-bezier(0.34,1.56,0.64,1)] hover:scale-[1.06] hover:shadow-[0_12px_32px_rgba(176,134,40,0.5)]">
        <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
                d="M17.5 14.4c-.3-.1-1.6-.8-1.9-.9-.2-.1-.4-.1-.6.1-.2.3-.7.9-.8 1-.1.2-.3.2-.5.1-.3-.1-1.2-.4-2.2-1.4-.8-.7-1.4-1.6-1.5-1.9-.2-.3 0-.4.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s1 2.5 1.1 2.7c.1.2 2 3 4.8 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.6-.6 1.8-1.3.2-.6.2-1.1.2-1.2-.1-.1-.3-.2-.6-.3Z" />
            <path
                d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2Zm0 18.2c-1.6 0-3.1-.4-4.5-1.2l-.3-.2-3.1.8.8-3-.2-.3A8.2 8.2 0 1 1 12 20.2Z" />
        </svg>
        <span
            class="absolute -top-[3px] -right-[3px] flex h-[18px] w-[18px] items-center justify-center rounded-full border-2 border-paper bg-ledger text-[10px] font-bold text-paper animate-pulse-badge">1</span>
    </button>
</div>

<!-- ================= CHAT BUBBLE ================= -->
<div id="chatBubble"
    class="fixed z-[61] w-[min(320px,calc(100vw-40px))] md:w-80 right-5 md:right-8 bottom-[calc(68px+env(safe-area-inset-bottom,0px)+84px)] md:bottom-24 overflow-hidden rounded-[18px_18px_18px_4px] border border-ink/10 bg-paper shadow-[0_20px_50px_rgba(31,42,36,0.25)] opacity-0 translate-y-4 scale-95 pointer-events-none transition-all duration-300 [transition-timing-function:cubic-bezier(0.34,1.56,0.64,1)] data-[open]:opacity-100 data-[open]:translate-y-0 data-[open]:scale-100 data-[open]:pointer-events-auto">
    <div class="flex items-center justify-between bg-ledger px-[18px] py-3.5 text-paper">
        <h4 class="flex items-center gap-2 font-serif text-[15px] font-semibold">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                <path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2Z" />
            </svg>
            Akuntan Sadlan
        </h4>
        <button id="chatClose" aria-label="Tutup"
            class="flex h-7 w-7 items-center justify-center rounded-full border-0 bg-paper/15 text-paper transition-colors duration-200 hover:bg-paper/[0.28]">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round">
                <path d="M6 6l12 12M18 6 6 18" />
            </svg>
        </button>
    </div>
    <div class="px-[18px] py-5 text-center">
        <h3 class="mb-1.5 font-serif text-[17px] font-semibold text-ink">Ada yang bisa kami bantu?</h3>
        <p class="mb-4 text-[13.5px] leading-relaxed text-slate">Tim kami siap membantu kebutuhan akuntansi dan
            perpajakan Anda. Klik tombol di bawah untuk konsultasi langsung via WhatsApp.</p>
        <a href="https://wa.me/{{ $info->no_whatsapp }}?text={{ urlencode('Halo, saya dari website ' . config('app.name') . '. Saya ingin berkonsultasi mengenai finance. Mohon informasinya lebih lanjut. Terima kasih.' . "\n\n" . 'Domain: ' . config('app.url')) }}"
            target="_blank"
            class="inline-flex items-center gap-2 rounded-full bg-[#25D366] px-6 py-[11px] text-sm font-semibold text-white no-underline shadow-[0_4px_14px_rgba(37,211,102,0.35)] transition-[transform,box-shadow] duration-200 hover:scale-[1.03] hover:shadow-[0_6px_20px_rgba(37,211,102,0.45)] [&>svg]:w-[18px] [&>svg]:h-[18px]">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M17.5 14.4c-.3-.1-1.6-.8-1.9-.9-.2-.1-.4-.1-.6.1-.2.3-.7.9-.8 1-.1.2-.3.2-.5.1-.3-.1-1.2-.4-2.2-1.4-.8-.7-1.4-1.6-1.5-1.9-.2-.3 0-.4.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.2s1 2.5 1.1 2.7c.1.2 2 3 4.8 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.6-.6 1.8-1.3.2-.6.2-1.1.2-1.2-.1-.1-.3-.2-.6-.3Z" />
                <path
                    d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2Zm0 18.2c-1.6 0-3.1-.4-4.5-1.2l-.3-.2-3.1.8.8-3-.2-.3A8.2 8.2 0 1 1 12 20.2Z" />
            </svg>
            Hubungi via WhatsApp
        </a>
    </div>
</div>
