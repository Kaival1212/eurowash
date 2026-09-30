<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Location extends Component
{
    #[Layout('components.layouts.app', [
        'title' => 'Find Eurowash | 99 Whitton Road, Twickenham TW1 1BZ | Directions &amp; Parking',
        'description' => 'Eurowash 24 7 365 is at 99 Whitton Road, Twickenham TW1 1BZ. On the B361 near Twickenham train station and Allianz Stadium. Bus routes 281 and 681. Pay & Display parking nearby. Open 24 hours, every day.',
        'keywords' => 'launderette 99 Whitton Road, Eurowash TW1 1BZ, launderette near Twickenham station, launderette near Allianz Stadium, Twickenham launderette directions',
        'canonical' => 'https://eurowashlaunderette.com/location',
        'ogTitle' => 'Find Eurowash | 99 Whitton Road, Twickenham TW1 1BZ',
        'ogDescription' => 'Directions, parking and public transport info for Eurowash 24 7 365 at 99 Whitton Road, Twickenham TW1 1BZ.',
        'ogUrl' => 'https://eurowashlaunderette.com/location',
        'robots' => 'index, follow'
    ])]
    public function render()
    {
        return <<<'HTML'
        <div>
            @verbatim
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://eurowashlaunderette.com/" },
                    { "@type": "ListItem", "position": 2, "name": "Location", "item": "https://eurowashlaunderette.com/location" }
                ]
            }
            </script>
            @endverbatim

            {{-- HERO --}}
            <section class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/40 to-blue-100/50 py-20 md:py-28" data-page-hero>
                <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash)]/10 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-24 -left-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash-light)]/10 blur-3xl"></div>

                <div class="relative container mx-auto px-4 max-w-4xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/80 backdrop-blur border border-[color:var(--color-eurowash)]/20 px-4 py-1.5 text-xs font-semibold text-[color:var(--color-eurowash)] tracking-wider uppercase shadow-sm" data-hero-eyebrow>
                        Find Us
                    </span>
                    <h1 class="mt-6 text-4xl md:text-6xl font-extrabold tracking-tight text-[color:var(--color-eurowash)] leading-[1.05]" data-hero-title>
                        99 Whitton Road, Twickenham.
                    </h1>
                    <p class="mt-6 text-lg md:text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed" data-hero-copy>
                        Two bus stops from Twickenham Station.
                        A short walk from Allianz Stadium. Always open.
                    </p>
                </div>
            </section>

            {{-- INFO + MAP --}}
            <section class="py-20 md:py-28 bg-white" id="location" data-location>
                <div class="container mx-auto px-4 max-w-7xl">
                    <div class="grid lg:grid-cols-5 gap-8 lg:gap-10">
                        <div class="lg:col-span-2 space-y-6" data-location-info>
                            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-6 md:p-8">
                                <div class="flex items-start gap-4">
                                    <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[color:var(--color-eurowash)]/10 text-[color:var(--color-eurowash)] shrink-0">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">Address</h3>
                                        <p class="mt-1 text-gray-700">
                                            <span class="font-semibold">99 Whitton Road,</span><br />
                                            Twickenham, TW1 1BZ
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-6 md:p-8">
                                <h3 class="text-lg font-bold text-gray-900">Getting Here</h3>
                                <p class="mt-3 text-sm text-gray-700 leading-relaxed">
                                    On Whitton Road (B361). Opposite Bus Stop
                                    (R) and adjacent to Bus Stop (M) — routes
                                    281 and 681 between Twickenham Train
                                    Station and the A316 Chertsey Road. Near
                                    Allianz Stadium Twickenham (Twickenham
                                    Rugby Stadium).
                                </p>
                            </div>

                            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-6 md:p-8">
                                <h3 class="text-lg font-bold text-gray-900">Parking</h3>
                                <p class="mt-3 text-sm text-gray-700 leading-relaxed">
                                    Controlled Parking Zone 08:30–18:30,
                                    Mon–Sat (excl. Bank Holidays).
                                    Restrictions may vary on RFU Event Days.
                                    Pay &amp; Display on Whitton Road,
                                    Chudleigh Road and Erncroft Way.
                                </p>
                            </div>

                            <div class="rounded-2xl bg-[color:var(--color-eurowash)] text-white p-6 md:p-8">
                                <h3 class="text-lg font-bold">Contact Us</h3>
                                <div class="mt-4 space-y-3 text-sm">
                                    <p>
                                        <span class="text-white/70 uppercase tracking-widest text-xs block">Phone / WhatsApp</span>
                                        <a href="tel:02080793035" class="mt-1 inline-block font-semibold text-white hover:text-cyan-200 transition">0208 079 3035</a>
                                    </p>
                                    <p>
                                        <span class="text-white/70 uppercase tracking-widest text-xs block">Email</span>
                                        <a href="mailto:eurowashcentre@gmail.com" class="mt-1 inline-block font-semibold text-white hover:text-cyan-200 transition break-all">eurowashcentre@gmail.com</a>
                                    </p>
                                    <p>
                                        <span class="text-white/70 uppercase tracking-widest text-xs block">Opening Hours</span>
                                        <span class="mt-1 inline-block font-semibold">24 hours · 7 days · 365 days</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-3" data-location-map>
                            <div class="rounded-3xl overflow-hidden shadow-xl ring-1 ring-black/5 h-full min-h-[26rem]">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.261651489994!2d-0.34092190209136713!3d51.45335229909268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760cf3728313e9%3A0x64b24e12b18d9d7e!2sEurowash%2024%207%20365!5e0!3m2!1sen!2suk!4v1743684821285!5m2!1sen!2suk"
                                    width="100%"
                                    height="100%"
                                    style="border: 0; min-height: 26rem;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- STOREFRONT STRIP --}}
            <section class="py-20 md:py-28 bg-gray-50" data-storefront>
                <div class="container mx-auto px-4 max-w-7xl">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                        <div data-storefront-copy>
                            <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                                Look For The Blue Sign
                            </span>
                            <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                                You'll know it when you see it.
                            </h2>
                            <p class="mt-6 text-gray-700 leading-relaxed">
                                The bright blue Eurowash storefront sits on
                                Whitton Road, wedged between transport links
                                and the neighbourhood you know. Step through
                                the door — it's open right now, and every
                                other hour of the year.
                            </p>
                        </div>

                        <div class="relative" data-storefront-image>
                            <div class="rounded-[2rem] overflow-hidden shadow-2xl ring-1 ring-black/5">
                                <img
                                    src="{{ asset('storage/eurowash-storefront.jpg') }}"
                                    alt="Eurowash storefront on Whitton Road, Twickenham"
                                    class="w-full h-[22rem] md:h-[26rem] object-cover"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
                gsap.registerPlugin(ScrollTrigger);

                const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
                tl.from('[data-hero-eyebrow]', { y: -14, duration: 0.5 })
                  .from('[data-hero-title]', { y: 20, duration: 0.7 }, '-=0.25')
                  .from('[data-hero-copy]', { y: 20, duration: 0.6 }, '-=0.4');

                const scrollFade = (target, opts = {}) => {
                    gsap.from(target, {
                        y: 40,
                        duration: 0.8,
                        ease: 'power2.out',
                        stagger: opts.stagger || 0,
                        scrollTrigger: {
                            trigger: opts.trigger || target,
                            start: 'top 82%',
                            once: true,
                        },
                    });
                };

                scrollFade('[data-location-info] > *', { trigger: '[data-location]', stagger: 0.1 });
                scrollFade('[data-location-map]', { trigger: '[data-location]' });
                scrollFade('[data-storefront-copy]', { trigger: '[data-storefront]' });
                scrollFade('[data-storefront-image]', { trigger: '[data-storefront]' });
            });
        </script>
        HTML;
    }
}
