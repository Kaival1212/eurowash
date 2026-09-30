<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Services extends Component
{

        #[Layout('components.layouts.app', [
        'title' => 'Eurowash Services | Self-Service Washing Machines &amp; Tumble Dryers in Twickenham',
        'description' => 'Self-service washing machines from 9kg up to 22kg and tumble dryers up to 20kg. Coin, card and contactless payment. Detergents on-site. Open 24 hours, 365 days a year at 99 Whitton Road, Twickenham.',
        'keywords' => 'self-service laundry Twickenham, washing machine hire Twickenham, tumble dryer Twickenham, big load washer Twickenham, duvet wash Twickenham',
        'canonical' => 'https://eurowashlaunderette.com/services',
        'ogType' => 'website',
        'ogUrl' => 'https://eurowashlaunderette.com/services',
        'ogTitle' => 'Eurowash Services | Self-Service Washing Machines &amp; Tumble Dryers in Twickenham',
        'ogDescription' => 'Washers 9-22kg, tumble dryers up to 20kg. Coin, card and contactless. Detergents on-site. Open 24/7/365 at 99 Whitton Road, Twickenham.',
        'robots' => 'index, follow',
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
                    { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://eurowashlaunderette.com/services" }
                ]
            }
            </script>
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Service",
                "serviceType": "Self-service launderette",
                "provider": { "@id": "https://eurowashlaunderette.com/#launderette" },
                "areaServed": { "@type": "City", "name": "Twickenham" },
                "name": "Self-service washing machines and tumble dryers",
                "description": "Coin, card and contactless washing machines from 9kg to 22kg capacity, and tumble dryers up to 20kg. Suitable for domestic and commercial laundry.",
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "GBP",
                    "priceRange": "£",
                    "availability": "https://schema.org/InStock"
                }
            }
            </script>
            @endverbatim

            {{-- HERO --}}
            <section class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/40 to-blue-100/50 py-20 md:py-28" data-page-hero>
                <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash)]/10 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-24 -left-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash-light)]/10 blur-3xl"></div>

                <div class="relative container mx-auto px-4 max-w-4xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/80 backdrop-blur border border-[color:var(--color-eurowash)]/20 px-4 py-1.5 text-xs font-semibold text-[color:var(--color-eurowash)] tracking-wider uppercase shadow-sm" data-hero-eyebrow>
                        Our Services
                    </span>
                    <h1 class="mt-6 text-4xl md:text-6xl font-extrabold tracking-tight text-[color:var(--color-eurowash)] leading-[1.05]" data-hero-title>
                        Do it yourself — on your schedule.
                    </h1>
                    <p class="mt-6 text-lg md:text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed" data-hero-copy>
                        A clean, safe and friendly self-service launderette
                        — monitored by CCTV and personal attendance.
                    </p>
                </div>
            </section>

            {{-- SELF-SERVICE CARD --}}
            <section class="py-20 md:py-28 bg-white" id="services" data-services>
                <div class="container mx-auto px-4 max-w-6xl">
                    <div class="max-w-3xl mx-auto rounded-3xl overflow-hidden bg-white shadow-xl ring-1 ring-gray-100" data-service-card>
                        <div class="relative h-72 md:h-80 overflow-hidden">
                            <img
                                src="{{ asset('storage/washer-jla.jpg') }}"
                                alt="Eurowash JLA Washing Machine"
                                class="w-full h-full object-cover"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[color:var(--color-eurowash)]/85 via-transparent to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-8">
                                <span class="inline-block text-xs font-semibold tracking-widest uppercase text-white/80">
                                    Self-Service
                                </span>
                                <h3 class="mt-2 text-3xl md:text-4xl font-bold text-white">
                                    24-7-365 Self-Service Laundry
                                </h3>
                            </div>
                        </div>
                        <div class="p-8 md:p-10">
                            <ul class="grid sm:grid-cols-2 gap-x-8 gap-y-4 text-gray-700">
                                @foreach ([
                                    'Easy to operate Washing Machines and Tumble Dryers',
                                    'Machine and Dryers accept coins, card and any contactless devices',
                                    'Washing Machines range from handling up to 14kg, 20kg and 22kg loads',
                                    'Tumble Dryers range from handling up to 13.5kg and 20kg',
                                    'Suitable for all laundry — commercial or domestic',
                                    "Machines set to 'high spin' — the most efficient and cost effective",
                                    'Detergents available to purchase in-store',
                                    'Books and thought-provoking quotes to read whilst you wait',
                                ] as $feature)
                                    <li class="flex items-start gap-3">
                                        <svg class="h-5 w-5 shrink-0 mt-0.5 text-[color:var(--color-eurowash)]" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm md:text-base leading-snug">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            {{-- MACHINES STRIP --}}
            <section class="py-20 md:py-28 bg-gray-50" data-machines>
                <div class="container mx-auto px-4 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center mb-14">
                        <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                            The Kit
                        </span>
                        <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                            Washers &amp; dryers for every load.
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <article class="group relative rounded-3xl overflow-hidden bg-white border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-machine-card>
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img
                                    src="{{ asset('storage/washer-jla.jpg') }}"
                                    alt="JLA IPSO commercial washing machine"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent"></div>
                                <div class="absolute inset-x-0 bottom-0 p-6 md:p-8 text-white">
                                    <p class="text-xs font-semibold tracking-[0.3em] uppercase text-white/70">Washer</p>
                                    <h3 class="mt-2 text-2xl md:text-3xl font-bold">JLA · IPSO</h3>
                                    <p class="mt-2 text-sm text-white/85 max-w-xs">
                                        Six programmes — Pre-Wash, Hot Wash,
                                        Warm Wash, Synthetics, Cold Wash and
                                        Hot Fast Wash. High-spin efficiency.
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="group relative rounded-3xl overflow-hidden bg-white border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-machine-card>
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img
                                    src="{{ asset('storage/washer-w7.jpg') }}"
                                    alt="Washer W7 with step-by-step instructions"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent"></div>
                                <div class="absolute inset-x-0 bottom-0 p-6 md:p-8 text-white">
                                    <p class="text-xs font-semibold tracking-[0.3em] uppercase text-white/70">Washer</p>
                                    <h3 class="mt-2 text-2xl md:text-3xl font-bold">Simple, Guided</h3>
                                    <p class="mt-2 text-sm text-white/85 max-w-xs">
                                        Clear step-by-step instructions on
                                        every machine — add soap, pay at the
                                        pay point, press start.
                                    </p>
                                </div>
                            </div>
                        </article>
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

                scrollFade('[data-service-card]', { trigger: '[data-services]' });
                scrollFade('[data-machine-card]', { trigger: '[data-machines]', stagger: 0.15 });
            });
        </script>
        HTML;
    }
}
