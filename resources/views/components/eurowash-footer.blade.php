<footer
    class="relative overflow-hidden text-white"
    data-eurowash-footer
>
    <!-- Gradient background -->
    <div
        class="absolute inset-0 bg-gradient-to-br from-[color:var(--color-eurowash-dark)] via-[color:var(--color-eurowash)] to-[color:var(--color-eurowash-dark)]"
    ></div>
    <div
        class="absolute inset-0 opacity-20"
        style="background-image: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.25) 0, transparent 40%), radial-gradient(circle at 80% 0%, rgba(255,255,255,0.15) 0, transparent 40%);"
    ></div>

    <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-10">
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">
                <!-- Brand -->
                <div class="lg:col-span-1" data-footer-col>
                    <h3 class="text-2xl font-extrabold tracking-tight">
                        EUROWASH
                        <span class="block text-sm font-medium tracking-[0.4em] text-white/70 mt-1">
                            24 · 7 · 365
                        </span>
                    </h3>
                    <p class="mt-6 text-sm text-white/80 leading-relaxed">
                        Open every hour of every day since 1996.
                        The first 24-hour self-service launderette in
                        South West London.
                    </p>
                </div>

                <!-- Quick Links -->
                <div data-footer-col>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/60 uppercase">
                        Explore
                    </h4>
                    <ul class="mt-5 space-y-3">
                        @foreach ([
                            'features' => 'Features',
                            'services' => 'Services',
                            'location' => 'Location',
                            'about' => 'About Us',
                        ] as $route => $label)
                            <li>
                                <a
                                    href="{{ route($route) }}"
                                    class="group inline-flex items-center gap-2 text-white/85 hover:text-white transition"
                                >
                                    <span class="w-0 h-px bg-white transition-all duration-300 group-hover:w-4"></span>
                                    <span>{{ $label }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact -->
                <div data-footer-col>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/60 uppercase">
                        Contact
                    </h4>
                    <ul class="mt-5 space-y-4 text-sm text-white/85">
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </span>
                            <a href="tel:02080793035" class="hover:text-white transition">0208 079 3035</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <a href="mailto:eurowashcentre@gmail.com" class="hover:text-white transition break-all">
                                eurowashcentre@gmail.com
                            </a>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/10">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </span>
                            <address class="not-italic">
                                99 Whitton Road<br />
                                Twickenham, TW1 1BZ
                            </address>
                        </li>
                    </ul>
                </div>

                <!-- Hours -->
                <div data-footer-col>
                    <h4 class="text-xs font-bold tracking-[0.2em] text-white/60 uppercase">
                        Opening Hours
                    </h4>
                    <div class="mt-5 rounded-2xl border border-white/15 bg-white/5 backdrop-blur-sm p-5">
                        <div class="flex items-center gap-3">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex h-3 w-3 rounded-full bg-emerald-400"></span>
                            </span>
                            <span class="text-sm font-semibold">Open Now</span>
                        </div>
                        <p class="mt-3 text-sm text-white/80 leading-relaxed">
                            24 hours a day<br />
                            7 days a week<br />
                            365 days a year
                        </p>
                        <p class="mt-4 text-xs uppercase tracking-widest text-white/60">
                            We never close.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Statutory Info -->
            <div class="mt-16 pt-8 border-t border-white/15">
                <div class="grid gap-8 md:grid-cols-2 md:items-end">
                    <div class="text-xs text-white/60 space-y-1.5">
                        <p class="font-semibold text-white/80 uppercase tracking-widest text-[10px]">
                            Statutory Information
                        </p>
                        <p>Eurowash 24 7 365 is a trading name of the Eurowash partnership.</p>
                        <p>The Eurowash partnership is registered in England &amp; Wales.</p>
                        <p>VAT registration number <strong class="text-white/80">473029690</strong>.</p>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-3 md:gap-6 text-sm">
                        <a href="#privacy" class="text-white/70 hover:text-white transition">Privacy Policy</a>
                        <a href="#terms" class="text-white/70 hover:text-white transition">Terms of Service</a>
                        <span class="text-white/50 text-xs">&copy; {{ date('Y') }} Eurowash Centre.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);

        gsap.from('[data-footer-col]', {
            scrollTrigger: {
                trigger: '[data-eurowash-footer]',
                start: 'top 85%',
                once: true,
            },
            opacity: 0,
            y: 24,
            duration: 0.7,
            stagger: 0.12,
            ease: 'power2.out',
        });
    });
</script>
