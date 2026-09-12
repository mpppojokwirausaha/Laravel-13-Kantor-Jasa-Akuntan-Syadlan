<!-- ================= FOOTER ================= -->
<footer class="bg-ink text-paper/80">
    <div class="max-w-[1680px] mx-auto px-6 lg:px-8 py-16 grid md:grid-cols-4 gap-12">

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

        <div>
            <h4 class="text-sm font-medium text-paper tracking-wide">Layanan</h4>
            <ul class="mt-4 space-y-2.5 text-sm">
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Jasa Pembukuan</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Jasa Perpajakan</a>
                </li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Akuntansi Manajemen</a>
                </li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Konsultasi
                        Manajemen</a>
                </li>
                <li><a href="{{ route('services') }}" class="hover:text-brass transition-colors">Jasa Sistem Teknologi
                        Informasi</a>
                </li>
            </ul>
        </div>

        <div>
            <h4 class="text-sm font-medium text-paper tracking-wide">Alamat</h4>
            <p class="mt-4 text-sm leading-relaxed">
                {{ $info->address }}
            </p>
        </div>

        <div>
            <h4 class="text-sm font-medium text-paper tracking-wide">Hubungi Kami</h4>
            <p class="mt-4 text-sm leading-relaxed">
                Dapatkan info layanan terbaru langsung ke email Anda.
            </p>
            <form class="mt-4 flex" onsubmit="return false;">
                <input type="email" placeholder="Alamat email Anda"
                    class="w-full bg-transparent border border-paper/30 px-3 py-2.5 text-sm placeholder:text-paper/40 focus:outline-none focus:border-brass" />
                <button class="px-4 py-2.5 bg-brass text-ink text-sm font-medium">Kirim</button>
            </form>
        </div>
    </div>

    <div class="border-t border-paper/10">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-8 py-6 text-xs text-paper/50">
            © 2026 Akuntant Sadlan. All rights reserved.
        </div>
    </div>
</footer>
