<!-- ================= FOOTER ================= -->
<footer class="bg-ink text-paper/80">
    <div class="max-w-[1680px] mx-auto px-6 lg:px-8  py-16 grid md:grid-cols-3 gap-12">

        {{-- Brand --}}
        <div>
            <h4 class="font-display text-lg font-extrabold text-paper">KANTOR JASA AKUNTAN SYADLAN</h4>
            <p class="mt-4 text-sm leading-relaxed">
                Jasa akuntansi profesional untuk kebutuhan bisnis Anda.
            </p>
            <div class="mt-5 flex gap-4 text-sm">
                <a href="{{ $info->instagram }}" target="_blank" rel="noopener noreferrer"
                    class="hover:text-brass transition-colors">Instagram</a>
                <a href="{{ $info->tiktok }}" target="_blank" rel="noopener noreferrer"
                    class="hover:text-brass transition-colors">Tiktok</a>
            </div>
        </div>

        {{-- Layanan --}}
        <div>
            <h4 class="text-sm font-medium text-paper tracking-wide">Layanan</h4>
            <ul class="mt-4 space-y-2.5 text-sm">
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Jasa Pembukuan</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Jasa Perpajakan</a>
                </li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Akuntansi Manajemen</a>
                </li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Konsultasi
                        Manajemen</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Jasa Sistem Teknologi
                        Informasi</a></li>
            </ul>
        </div>
        {{-- Alamat + Email + Telepon --}}
        <div>
            <h4 class="text-sm font-medium text-paper tracking-wide">Alamat</h4>
            <p class="mt-4 text-sm leading-relaxed">
                {{ $info->address }}
            </p>

            <ul class="mt-5 space-y-3 text-sm">
                {{-- Email --}}
                <li>
                    <a href="mailto:{{ $info->email }}"
                        class="flex items-center gap-3 hover:text-brass transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="break-all">{{ $info->email }}</span>
                    </a>
                </li>

                {{-- Telepon --}}
                <li>
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $info->no_whatsapp) }}"
                        class="flex items-center gap-3 hover:text-brass transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>{{ $info->no_whatsapp }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="border-t border-paper/10">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8 py-6 text-xs text-paper/50">
            © 2026 Akuntant Sadlan. All rights reserved.
        </div>
    </div>
</footer>
