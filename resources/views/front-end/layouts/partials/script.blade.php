<script>
    // Reveal-on-scroll: toggle Tailwind utility classes instead of a custom .is-visible CSS rule
    // Mendukung dua selector: .reveal dan [data-reveal]
    const revealEls = document.querySelectorAll('.reveal, [data-reveal]');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-6');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    });
    revealEls.forEach((el) => revealObserver.observe(el));

    // Header: transparan di atas hero gelap, solid begitu discroll —
    // ditoggle lewat utility class Tailwind, bukan class CSS custom .is-scrolled
    // Juga toggle atribut data-scrolled untuk styling berbasis CSS
    const siteHeader = document.getElementById('site-header');
    const logoBadge = document.getElementById('logoBadge');
    const logoSub = document.getElementById('logoSub');
    const headerLinks = document.querySelectorAll('.header-link');
    const headerCta = document.getElementById('headerCta');

    function updateHeaderState() {
        const scrolled = window.scrollY > 40;

        siteHeader.toggleAttribute('data-scrolled', scrolled);

        siteHeader.classList.toggle('bg-transparent', !scrolled);
        siteHeader.classList.toggle('bg-paper/95', scrolled);
        siteHeader.classList.toggle('backdrop-blur-md', scrolled);
        siteHeader.classList.toggle('border-b', scrolled);
        siteHeader.classList.toggle('border-ink/10', scrolled);

        if (logoBadge) {
            logoBadge.classList.toggle('bg-paper/90', !scrolled);
            logoBadge.classList.toggle('text-ink', !scrolled);
            logoBadge.classList.toggle('bg-ink', scrolled);
            logoBadge.classList.toggle('text-paper', scrolled);
        }

        if (logoSub) {
            logoSub.classList.toggle('text-paper', !scrolled);
            logoSub.classList.toggle('text-ink', scrolled);
        }

        headerLinks.forEach((link) => {
            link.classList.toggle('text-paper/90', !scrolled);
            link.classList.toggle('text-ink', scrolled);
        });

        if (headerCta) {
            headerCta.classList.toggle('hover:bg-paper', !scrolled);
            headerCta.classList.toggle('hover:bg-ink', scrolled);
            headerCta.classList.toggle('hover:text-paper', scrolled);
        }
    }
    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, {
        passive: true
    });

    // Filter kategori (visual saja)
    const catPills = document.querySelectorAll('.cat-pill');
    catPills.forEach((pill) => {
        pill.addEventListener('click', () => {
            catPills.forEach((p) => p.removeAttribute('data-active'));
            pill.setAttribute('data-active', '');
        });
    });

    // Nav underline (desktop) + active state (mobile bottom nav) mengikuti section yang terlihat
    const navLinks = document.querySelectorAll('[data-nav-link]');
    const mobileNavLinks = document.querySelectorAll('[data-mobile-nav]');
    const trackedIds = new Set();

    navLinks.forEach((link) => {
        const href = link.getAttribute('href');
        if (href && href.startsWith('#')) trackedIds.add(href);
    });
    mobileNavLinks.forEach((link) => trackedIds.add(link.getAttribute('data-section')));

    const navSections = Array.from(trackedIds)
        .map((id) => document.querySelector(id))
        .filter(Boolean);

    function setActiveNavLink() {
        let activeId = null;
        navSections.forEach((sec) => {
            const rect = sec.getBoundingClientRect();
            if (rect.top <= 120 && rect.bottom > 120) {
                activeId = '#' + sec.id;
            }
        });

        navLinks.forEach((link) => {
            if (link.getAttribute('href') === activeId) {
                link.classList.remove('border-transparent');
                link.classList.add('border-current');
            } else {
                link.classList.remove('border-current');
                link.classList.add('border-transparent');
            }
        });

        mobileNavLinks.forEach((link) => {
            link.toggleAttribute('data-active', link.getAttribute('data-section') === activeId);
        });
    }
    setActiveNavLink();
    window.addEventListener('scroll', setActiveNavLink, {
        passive: true
    });

    // Floating chat toggle: toggle utility class Tailwind + atribut data-open
    const chatToggle = document.getElementById('chatToggle');
    const chatBubble = document.getElementById('chatBubble');
    const chatClose = document.getElementById('chatClose');

    const chatOpenClasses = ['opacity-100', 'translate-y-0', 'scale-100', 'pointer-events-auto'];
    const chatClosedClasses = ['opacity-0', 'translate-y-4', 'scale-95', 'pointer-events-none'];

    function toggleChat() {
        if (chatBubble.classList.contains('opacity-100')) {
            chatBubble.classList.remove(...chatOpenClasses);
            chatBubble.classList.add(...chatClosedClasses);
        } else {
            chatBubble.classList.remove(...chatClosedClasses);
            chatBubble.classList.add(...chatOpenClasses);
        }

        chatBubble.toggleAttribute('data-open');
    }

    if (chatToggle) chatToggle.addEventListener('click', toggleChat);
    if (chatClose) chatClose.addEventListener('click', toggleChat);

    document.addEventListener('click', (e) => {
        const isChat = e.target.closest('#floatingChat') || e.target.closest('#chatBubble');
        const isOpen = chatBubble.classList.contains('opacity-100') || chatBubble.hasAttribute('data-open');
        if (!isChat && isOpen) {
            chatBubble.classList.remove(...chatOpenClasses);
            chatBubble.classList.add(...chatClosedClasses);
            chatBubble.removeAttribute('data-open');
        }
    });

    // FAQ: hanya satu item terbuka dalam satu waktu
    document.querySelectorAll('details').forEach((item) => {
        item.addEventListener('toggle', () => {
            if (item.open) {
                document.querySelectorAll('details').forEach((other) => {
                    if (other !== item) other.open = false;
                });
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // Swiper: Feature Carousel
    new Swiper('.feature-swiper', {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        spaceBetween: 16,
        slidesPerView: 1.1,
        pagination: {
            el: '.feature-swiper .swiper-pagination',
            clickable: true,
        },
        speed: 500,
    });

    // Swiper: Testimonial Carousel
    new Swiper('.testimonial-swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        spaceBetween: 24,
        slidesPerView: 1.1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        speed: 600,
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        },
    });
</script>
