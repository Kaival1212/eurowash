<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Features extends Component
{
       #[Layout('components.layouts.app', [
        'title' => 'Why Choose Eurowash 24 7 365 | 24-Hour Launderette Features in Twickenham',
        'description' => 'Six reasons to choose Eurowash 24 7 365: open every hour of every day, modern washers up to 22kg, contactless and coin payment, CCTV-monitored, on-site vending, and a clean friendly environment on Whitton Road, Twickenham TW1 1BZ.',
        'keywords' => '24 hour launderette Twickenham, self-service laundry TW1, launderette features Twickenham, contactless laundry Twickenham, 24 7 laundry near me',
        'canonical' => 'https://eurowashlaunderette.com/features',
        'ogTitle' => 'Why Choose Eurowash 24 7 365 | 24-Hour Launderette Features in Twickenham',
        'ogDescription' => 'Six reasons to choose Eurowash 24 7 365 on Whitton Road, Twickenham — modern machines, contactless payment, CCTV-monitored, open 24/7/365.',
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
                    { "@type": "ListItem", "position": 2, "name": "Features", "item": "https://eurowashlaunderette.com/features" }
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
                        Why Eurowash
                    </span>
                    <h1 class="mt-6 text-4xl md:text-6xl font-extrabold tracking-tight text-[color:var(--color-eurowash)] leading-[1.05]" data-hero-title>
                        Six reasons customers keep coming back.
                    </h1>
                    <p class="mt-6 text-lg md:text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed" data-hero-copy>
                        Modern machines, honest pricing, and doors that
                        never close. Here's what makes Eurowash 24 7 365
                        the go-to launderette in South West London.
                    </p>
                </div>
            </section>

            {{-- FEATURE GRID --}}
            <section class="py-20 md:py-28 bg-white" id="features" data-features>
                <div class="container mx-auto px-4 max-w-7xl">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                        @php
                            $features = [
                                [
                                    'title' => 'Open 24 · 7 · 365',
                                    'body'  => 'Always open, even on bank holidays. Hours may vary on RFU event days.',
                                    'icon'  => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                                ],
                                [
                                    'title' => 'Modern Equipment',
                                    'body'  => 'Brand new upgraded machines and payment systems.',
                                    'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                                ],
                                [
                                    'title' => 'Cash &amp; Cashless',
                                    'body'  => 'Card, contactless or coins. Exchange notes for coins in-store.',
                                    'icon'  => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                                ],
                                [
                                    'title' => 'Vending Machines',
                                    'body'  => 'Hot &amp; cold drinks available, as well as confectionery.',
                                    'icon'  => 'M20 7l-8 4-8-4m16 0l-8 4m8-4v10a2 2 0 01-2 2H6a2 2 0 01-2-2V7m16 0L12 3 4 7',
                                ],
                                [
                                    'title' => 'Clean &amp; Friendly',
                                    'body'  => '"Tidy room, tidy mind." Cleaned daily so you can wash in comfort.',
                                    'icon'  => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
                                ],
                                [
                                    'title' => 'Inspiring Quotes',
                                    'body'  => '"You will be the same person in five years as you are today, except for the people you meet and the books you read."',
                                    'icon'  => 'M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z',
                                ],
                            ];
                        @endphp

                        @foreach ($features as $feature)
                            <article class="group relative rounded-2xl bg-white p-8 border border-gray-100 hover:border-[color:var(--color-eurowash)]/30 hover:-translate-y-1 hover:shadow-xl hover:shadow-[color:var(--color-eurowash)]/5 transition-all duration-300" data-feature-card>
                                <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[color:var(--color-eurowash)]/10 text-[color:var(--color-eurowash)] group-hover:bg-[color:var(--color-eurowash)] group-hover:text-white transition-colors duration-300">
                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $feature['icon'] }}" />
                                    </svg>
                                </div>
                                <h3 class="mt-6 text-xl font-bold text-gray-900">
                                    {!! $feature['title'] !!}
                                </h3>
                                <p class="mt-3 text-gray-600 leading-relaxed">
                                    {!! $feature['body'] !!}
                                </p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- BOROUGHS --}}
            <section class="py-16 md:py-20 bg-gray-50" data-boroughs>
                <div class="container mx-auto px-4 max-w-4xl text-center">
                    <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]" data-boroughs-item>
                        Serving South West London
                    </span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight" data-boroughs-item>
                        Everyone welcome.
                    </h2>
                    <p class="mt-6 text-gray-600 leading-relaxed" data-boroughs-item>
                        Proud to serve residents, employees and visitors of the
                        London Boroughs of Ealing, Hammersmith &amp; Fulham,
                        Hillingdon, Hounslow, Kensington &amp; Chelsea, Richmond,
                        Merton and Southwark — plus customers from Barnes, Barons
                        Court, Brentford, Brompton, Chessington, Chiswick,
                        Colliers Wood, Datchet, Feltham, Hampton, Hayes, Heathrow,
                        Heston, Hounslow, Isleworth, Kingston, Knightsbridge,
                        Mortlake, New Malden, Notting Hill, Raynes Park, Shepherd's
                        Bush, Slough, Southall, St. Margarets, Staines, Twickenham,
                        Uxbridge, West Kensington, Whitton, Wimbledon, Windsor
                        and afar.
                    </p>
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

                scrollFade('[data-feature-card]', { trigger: '[data-features]', stagger: 0.1 });
                scrollFade('[data-boroughs-item]', { trigger: '[data-boroughs]', stagger: 0.12 });
            });
        </script>
        HTML;
    }
}
