<div class="bg-white text-gray-800">
    @if(session('error'))
    <div class="container mx-auto px-4 mt-6">
        <div class="flex items-center justify-between bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-2xl shadow-sm">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M5.455 4.545a9 9 0 0112.728 0m0 0a9 9 0 010 12.728m0 0a9 9 0 01-12.728 0m0 0a9 9 0 010-12.728" />
                </svg>
                <span class="text-base font-semibold">{{ session("error") }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700 text-2xl leading-none">&times;</button>
        </div>
    </div>
    @endif

    {{-- =============================================================
         HERO
         ============================================================= --}}
    <section
        class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/40 to-blue-100/50 pt-16 pb-24 md:pt-20 md:pb-32"
        data-hero
    >
        <!-- Decorative background blobs -->
        <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[color:var(--color-eurowash)]/10 blur-3xl"></div>
        <div class="pointer-events-none absolute top-1/2 -left-32 h-96 w-96 rounded-full bg-[color:var(--color-eurowash-light)]/10 blur-3xl"></div>

        <div class="relative container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-white/80 backdrop-blur border border-[color:var(--color-eurowash)]/20 px-4 py-1.5 text-xs font-semibold text-[color:var(--color-eurowash)] tracking-wider uppercase shadow-sm"
                        data-hero-eyebrow
                    >
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
                        </span>
                        Open Now · 24 / 7 / 365
                    </span>

                    <h1
                        class="mt-6 text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-[color:var(--color-eurowash)] leading-[1.05]"
                        data-hero-title
                    >
                        Eurowash
                        <span class="block text-3xl md:text-4xl lg:text-5xl font-bold text-gray-500 tracking-widest mt-2">
                            24 · 7 · 365
                        </span>
                    </h1>

                    <p
                        class="mt-8 text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl"
                        data-hero-copy
                    >
                        A clean, safe and friendly self-service launderette in
                        Twickenham — monitored virtually by CCTV and in
                        person, including night patrols.
                    </p>

                    <div class="mt-10 flex flex-wrap gap-4" data-hero-copy>
                        <a
                            href="#services"
                            class="group inline-flex items-center gap-2 bg-[color:var(--color-eurowash)] hover:bg-[color:var(--color-eurowash-dark)] text-white font-semibold px-7 py-3.5 rounded-full shadow-lg shadow-[color:var(--color-eurowash)]/20 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200"
                        >
                            Our Services
                            <svg class="h-5 w-5 transition-transform duration-200 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a
                            href="#location"
                            class="inline-flex items-center gap-2 bg-white border-2 border-[color:var(--color-eurowash)] text-[color:var(--color-eurowash)] font-semibold px-7 py-3.5 rounded-full hover:bg-[color:var(--color-eurowash)] hover:text-white transition-all duration-200"
                        >
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            Find Us
                        </a>
                    </div>

                    <!-- Trust stats -->
                    <dl class="mt-14 grid grid-cols-3 gap-6 max-w-md" data-hero-stats>
                        <div>
                            <dt class="text-xs text-gray-500 uppercase tracking-widest">Since</dt>
                            <dd class="mt-1 text-2xl font-bold text-[color:var(--color-eurowash)]">1996</dd>
                        </div>
                        <div>
                            <dt class="text-xs text-gray-500 uppercase tracking-widest">Days a Year</dt>
                            <dd class="mt-1 text-2xl font-bold text-[color:var(--color-eurowash)]">365</dd>
                        </div>
                        <div>
                            <dt class="text-xs text-gray-500 uppercase tracking-widest">Never Closed</dt>
                            <dd class="mt-1 text-2xl font-bold text-[color:var(--color-eurowash)]">24h</dd>
                        </div>
                    </dl>
                </div>

                <!-- Hero image -->
                <div class="relative" data-hero-image>
                    <div class="relative rounded-[2rem] overflow-hidden shadow-2xl shadow-[color:var(--color-eurowash)]/25 ring-1 ring-black/5">
                        <img
                            src="{{ asset('storage/eurowash-storefront.jpg') }}"
                            alt="Eurowash Twickenham storefront"
                            class="w-full h-[26rem] md:h-[32rem] object-cover"
                        />
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[color:var(--color-eurowash-dark)]/95 via-[color:var(--color-eurowash)]/70 to-transparent p-6 md:p-8">
                            <p class="text-white/80 text-xs font-semibold tracking-widest uppercase">
                                99 Whitton Road · Twickenham
                            </p>
                            <p class="text-white text-xl md:text-2xl font-bold mt-1">
                                Modern equipment. Clean environment.
                            </p>
                        </div>
                    </div>

                    <!-- Floating card -->
                    <div class="absolute -bottom-6 -left-4 md:-left-8 bg-white rounded-2xl shadow-xl px-5 py-4 flex items-center gap-4 border border-gray-100">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <div>
                            <div class="text-xs uppercase text-gray-500 tracking-widest">Contactless</div>
                            <div class="text-sm font-bold text-gray-900">Card &amp; Coin Accepted</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================================
         MEET BIG BERTHA
         ============================================================= --}}
    <section class="py-20 md:py-28 bg-[color:var(--color-eurowash)] text-white overflow-hidden" data-bertha>
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="relative order-2 lg:order-1" data-bertha-image>
                    <div class="absolute -inset-6 bg-gradient-to-br from-cyan-400/30 to-blue-400/20 rounded-[2rem] blur-2xl"></div>
                    <div class="relative rounded-[2rem] overflow-hidden shadow-2xl ring-1 ring-white/10">
                        <img
                            src="{{ asset('storage/big-bertha.jpg') }}"
                            alt="New monster Big Bertha neon sign"
                            class="w-full h-[24rem] md:h-[28rem] object-cover"
                        />
                    </div>
                </div>

                <div class="order-1 lg:order-2" data-bertha-copy>
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/20 px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-cyan-200">
                        New Arrival
                    </span>
                    <h2 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight">
                        Meet <span class="text-cyan-300">Big Bertha</span>
                    </h2>
                    <p class="mt-6 text-lg md:text-xl text-white/85 leading-relaxed">
                        Our newest monster — a giant capacity washer built
                        to handle everything from a family duvet to a
                        full-team kit bag. One load. Sorted.
                    </p>

                    <ul class="mt-8 space-y-3 text-white/90">
                        @foreach ([
                            'Handles duvets, sports kits and bulky loads',
                            'Higher spin cycle — faster drying, lower cost',
                            'Same 24/7 contactless payment as every machine',
                        ] as $point)
                            <li class="flex items-start gap-3">
                                <svg class="h-6 w-6 shrink-0 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================================
         MACHINES GALLERY
         ============================================================= --}}
    <section class="py-20 md:py-28 bg-white" id="machines" data-machines>
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="max-w-2xl">
                <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                    The Kit
                </span>
                <h2 class="mt-3 text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Modern machines,<br />built for real loads.
                </h2>
                <p class="mt-5 text-lg text-gray-600 leading-relaxed">
                    Washers from 9kg up to 22kg. Tumble dryers up to
                    20kg. Whether you're doing a family wash, sports kit
                    or a run of duvets — there's a machine for it.
                </p>
            </div>

            <div class="mt-14 grid md:grid-cols-2 gap-8">
                <article class="group relative rounded-3xl overflow-hidden bg-gray-50 border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-machine-card>
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img
                            src="{{ asset('storage/washer-jla.jpg') }}"
                            alt="JLA IPSO commercial washing machine"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6 md:p-8 text-white">
                            <p class="text-xs font-semibold tracking-[0.3em] uppercase text-white/70">Washer</p>
                            <h3 class="mt-2 text-2xl md:text-3xl font-bold">JLA · IPSO</h3>
                            <p class="mt-2 text-sm text-white/85 max-w-xs">
                                Six programmes from Cold Wash to Hot Fast
                                Wash. High-spin efficiency.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="group relative rounded-3xl overflow-hidden bg-gray-50 border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-machine-card>
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img
                            src="{{ asset('storage/washer-w7.jpg') }}"
                            alt="Washer W7 with easy step-by-step instructions"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-6 md:p-8 text-white">
                            <p class="text-xs font-semibold tracking-[0.3em] uppercase text-white/70">Washer</p>
                            <h3 class="mt-2 text-2xl md:text-3xl font-bold">Simple, Guided</h3>
                            <p class="mt-2 text-sm text-white/85 max-w-xs">
                                Clear step-by-step instructions on every
                                machine. Add soap, pay, press start.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- =============================================================
         SERVICES · Self-Service card
         ============================================================= --}}
    <section class="py-20 md:py-28 bg-gray-50" id="services" data-services>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                    Our Services
                </span>
                <h2 class="mt-3 text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Do it yourself — on your schedule.
                </h2>
                <p class="mt-5 text-lg text-gray-600 leading-relaxed">
                    Eurowash 24 7 365 is a clean, safe and friendly
                    self-service launderette; monitored by CCTV and personal
                    attendance.
                </p>
            </div>

            <div class="max-w-3xl mx-auto rounded-3xl overflow-hidden bg-white shadow-xl ring-1 ring-gray-100" data-service-card>
                <div class="relative h-72 md:h-80 overflow-hidden">
                    <img
                        src="{{ asset('storage/washer-jla.jpg') }}"
                        alt="Eurowash JLA Washing Machine"
                        class="w-full h-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-[color:var(--color-eurowash)]/80 via-transparent to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8">
                        <h3 class="text-3xl md:text-4xl font-bold text-white">
                            24-7-365 Self-Service Laundry
                        </h3>
                    </div>
                </div>
                <div class="p-8 md:p-10">
                    <ul class="grid sm:grid-cols-2 gap-x-8 gap-y-4 text-gray-700">
                        @foreach ([
                            'Easy to operate Washing Machines and Tumble Dryers',
                            'Machine and Dryers accept coins, card and any contactless devices',
                            'Washing Machines range from 9kg to 20kg loads',
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

    {{-- =============================================================
         WHY CHOOSE US · Features grid
         ============================================================= --}}
    <section class="py-20 md:py-28 bg-white" id="features" data-features>
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                    Why Eurowash
                </span>
                <h2 class="mt-3 text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Six reasons customers keep coming back.
                </h2>
            </div>

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

            <div class="mt-16 max-w-4xl mx-auto text-center text-gray-600 text-sm md:text-base leading-relaxed">
                <p>
                    Proud to serve residents, employees and visitors of the
                    London Boroughs of Ealing, Hammersmith &amp; Fulham,
                    Hillingdon, Hounslow, Kensington &amp; Chelsea, Richmond,
                    Merton and Southwark — plus customers from Barnes, Barons
                    Court, Brentford, Brompton, Chessington, Chiswick,
                    Colliers Wood, Datchet, Feltham, Hampton, Hayes,
                    Heathrow, Heston, Hounslow, Isleworth, Kingston,
                    Knightsbridge, Mortlake, New Malden, Notting Hill, Raynes
                    Park, Shepherd's Bush, Slough, Southall, St. Margarets,
                    Staines, Twickenham, Uxbridge, West Kensington, Whitton,
                    Wimbledon, Windsor and afar. All welcome.
                </p>
            </div>
        </div>
    </section>

    {{-- =============================================================
         ABOUT
         ============================================================= --}}
    <section id="about" class="py-20 md:py-28 bg-gray-50" data-about>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-about-copy>
                    <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                        About Us
                    </span>
                    <h2 class="mt-3 text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                        A local business,<br />built for the neighbourhood.
                    </h2>

                    <div class="mt-10 space-y-8">
                        <div>
                            <h3 class="text-lg font-bold text-[color:var(--color-eurowash)]">
                                Our Heritage
                            </h3>
                            <p class="mt-2 text-gray-700 leading-relaxed">
                                Established in the 1960s and now a
                                family-owned local business, we've been
                                part of the community for generations.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[color:var(--color-eurowash)]">
                                Modern Innovation
                            </h3>
                            <p class="mt-2 text-gray-700 leading-relaxed">
                                The first — and only — 24-hour
                                self-service launderette in South West
                                London. We've embraced modern technology
                                to serve your needs: upgraded machines
                                for higher capacity and better quality,
                                contactless and card payments, and truly
                                24-hour access. We even use AI — meet
                                Eurobott, our own assistant.
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

    {{-- =============================================================
         LOCATION
         ============================================================= --}}
    <section class="py-20 md:py-28 bg-white" id="location" data-location>
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-semibold tracking-widest uppercase text-[color:var(--color-eurowash)]">
                    Find Us
                </span>
                <h2 class="mt-3 text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                    99 Whitton Road, Twickenham.
                </h2>
            </div>

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
                            On Whitton Road (B361). Opposite Bus Stop (R)
                            and adjacent to Bus Stop (M) — routes 281 and
                            681 between Twickenham Train Station and the
                            A316 Chertsey Road. Near Allianz Stadium
                            Twickenham (Twickenham Rugby Stadium).
                        </p>
                    </div>

                    <div class="rounded-2xl bg-gray-50 border border-gray-100 p-6 md:p-8">
                        <h3 class="text-lg font-bold text-gray-900">Parking</h3>
                        <p class="mt-3 text-sm text-gray-700 leading-relaxed">
                            Controlled Parking Zone 08:30–18:30, Mon–Sat
                            (excl. Bank Holidays). Restrictions may vary
                            on RFU Event Days. Pay &amp; Display on
                            Whitton Road, Chudleigh Road and Erncroft
                            Way.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[color:var(--color-eurowash)] text-white p-6 md:p-8">
                        <h3 class="text-lg font-bold">Get in Touch</h3>
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
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);

        // Hero entrance — no opacity animation, only y so nothing goes invisible on failure
        const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });
        heroTl
            .from('[data-hero-eyebrow]', { y: -14, duration: 0.5 })
            .from('[data-hero-title]', { y: 20, duration: 0.7 }, '-=0.25')
            .from('[data-hero-copy]', { y: 20, duration: 0.6, stagger: 0.12 }, '-=0.4')
            .from('[data-hero-stats] > div', { y: 20, duration: 0.5, stagger: 0.1 }, '-=0.3')
            .from('[data-hero-image]', { y: 30, duration: 0.8 }, '-=0.9');

        // Reusable scroll fade-up
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

        scrollFade('[data-bertha-image]', { trigger: '[data-bertha]' });
        scrollFade('[data-bertha-copy]', { trigger: '[data-bertha]' });
        scrollFade('[data-machine-card]', { trigger: '[data-machines]', stagger: 0.15 });
        scrollFade('[data-service-card]', { trigger: '[data-services]' });
        scrollFade('[data-feature-card]', { trigger: '[data-features]', stagger: 0.1 });
        scrollFade('[data-about-copy]', { trigger: '[data-about]' });
        scrollFade('[data-about-media]', { trigger: '[data-about]' });
        scrollFade('[data-location-info] > *', { trigger: '[data-location]', stagger: 0.1 });
        scrollFade('[data-location-map]', { trigger: '[data-location]' });
    });
</script>
