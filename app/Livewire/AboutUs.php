<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;


class AboutUs extends Component
{
        #[Layout('components.layouts.app', [
        'title' => 'About Eurowash 24 7 365 | Family-Owned Launderette in Twickenham Since 1996',
        'description' => 'Eurowash was established in the 1960s and has been serving Twickenham since 1996 as a family-owned business — the first 24-hour self-service launderette in South West London. Learn our story.',
        'keywords' => 'about Eurowash Twickenham, family launderette Twickenham, Eurowash history, Twickenham launderette since 1996',
        'canonical' => 'https://eurowashlaunderette.com/about',
        'ogTitle' => 'About Eurowash 24 7 365 | Family-Owned Launderette in Twickenham Since 1996',
        'ogDescription' => 'The story behind Eurowash 24 7 365 — the first 24-hour self-service launderette in South West London, family-owned since 1996.',
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
                    { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://eurowashlaunderette.com/about" }
                ]
            }
            </script>
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "AboutPage",
                "name": "About Eurowash 24 7 365",
                "mainEntity": { "@id": "https://eurowashlaunderette.com/#launderette" },
                "description": "The story behind Eurowash 24 7 365 — established in the 1960s, family-owned since 1996, the first 24-hour self-service launderette in South West London."
            }
            </script>
            @endverbatim

            {{-- HERO --}}
            <section class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/40 to-blue-100/50 py-20 md:py-28" data-page-hero>
                <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash)]/10 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-24 -left-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash-light)]/10 blur-3xl"></div>

                <div class="relative container mx-auto px-4 max-w-4xl text-center">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/80 backdrop-blur border border-[color:var(--color-eurowash)]/20 px-4 py-1.5 text-xs font-semibold text-[color:var(--color-eurowash)] tracking-wider uppercase shadow-sm" data-hero-eyebrow>
                        About Us
                    </span>
                    <h1 class="mt-6 text-4xl md:text-6xl font-extrabold tracking-tight text-[color:var(--color-eurowash)] leading-[1.05]" data-hero-title>
                        A local business,<br />built for the neighbourhood.
                    </h1>
                    <p class="mt-6 text-lg md:text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed" data-hero-copy>
                        Family-owned. Community-first. Open every hour of
                        every day — since 1996.
                    </p>
                </div>
            </section>

            {{-- HERITAGE + VIDEO --}}
            <section id="about" class="py-20 md:py-28 bg-white" data-about>
                <div class="container mx-auto px-4 max-w-6xl">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                        <div data-about-copy>
                            <div class="space-y-10">
                                <div>
                                    <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                                        Chapter 01
                                    </span>
                                    <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                                        Our Heritage
                                    </h2>
                                    <p class="mt-4 text-gray-700 leading-relaxed">
                                        Eurowash was established in the 1960s.
                                        The current owners have been providing
                                        gas, water and electricity for the
                                        local community's washing and drying
                                        needs since 1996.
                                    </p>
                                </div>

                                <div>
                                    <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                                        Chapter 02
                                    </span>
                                    <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                                        Modern Innovation
                                    </h2>
                                    <p class="mt-4 text-gray-700 leading-relaxed">
                                        Eurowash 24 7 365 is the first — and
                                        only — 24-hour self-service launderette
                                        in South West London. We've embraced
                                        modern technology to serve your needs:
                                        upgraded machines for higher capacity
                                        and better quality, contactless and
                                        card payments, and truly 24-hour
                                        opening so you can wash and dry any
                                        time, day or night.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative" data-about-media>
                            <div class="rounded-3xl overflow-hidden shadow-2xl ring-1 ring-black/5 aspect-[4/5] md:aspect-[3/4]">
                                <video
                                    class="w-full h-full object-cover"
                                    autoplay
                                    muted
                                    loop
                                    playsinline
                                >
                                    <source
                                        src="{{ asset('storage/EuroWashVideo.mp4') }}"
                                        type="video/mp4"
                                    />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- BIG BERTHA STRIP --}}
            <section class="py-20 md:py-28 bg-[color:var(--color-eurowash)] text-white overflow-hidden" data-bertha>
                <div class="container mx-auto px-4 max-w-7xl">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                        <div class="relative order-2 lg:order-1" data-bertha-image>
                            <div class="absolute -inset-6 bg-gradient-to-br from-cyan-400/30 to-blue-400/20 rounded-[2rem] blur-2xl"></div>
                            <div class="relative rounded-[2rem] overflow-hidden shadow-2xl ring-1 ring-white/10">
                                <img
                                    src="{{ asset('storage/big-bertha.jpg') }}"
                                    alt="New monster Big Bertha neon sign"
                                    class="w-full h-[22rem] md:h-[26rem] object-cover"
                                />
                            </div>
                        </div>

                        <div class="order-1 lg:order-2" data-bertha-copy>
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/20 px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-cyan-200">
                                A Bit of Character
                            </span>
                            <h2 class="mt-6 text-3xl md:text-5xl font-extrabold tracking-tight">
                                Meet <span class="text-cyan-300">Big Bertha</span>
                            </h2>
                            <p class="mt-6 text-lg text-white/85 leading-relaxed">
                                Our giant capacity washer — because the
                                launderette should be as friendly and fun as
                                the neighbourhood it serves. Big Bertha
                                handles the loads other machines can't:
                                duvets, team kits, and everything in between.
                            </p>
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

                scrollFade('[data-about-copy]', { trigger: '[data-about]' });
                scrollFade('[data-about-media]', { trigger: '[data-about]' });
                scrollFade('[data-bertha-image]', { trigger: '[data-bertha]' });
                scrollFade('[data-bertha-copy]', { trigger: '[data-bertha]' });
            });
        </script>
        HTML;
    }
}
