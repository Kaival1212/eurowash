<header
    x-data="{ scrolled: false, mobileOpen: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 8)"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100' : 'bg-white border-b border-transparent'"
    class="sticky top-0 z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="flex items-center justify-between gap-4 transition-all duration-300"
            :class="scrolled ? 'py-2' : 'py-3 md:py-4'"
        >
            <!-- Logo -->
            <a
                href="{{ route('home') }}"
                class="flex items-center shrink-0 group"
                data-eurowash-logo
            >
                <img
                    src="{{ asset('storage/TitleLogo.png') }}"
                    alt="Eurowash Logo"
                    class="h-20 sm:h-24 md:h-28 lg:h-32 w-auto transition-transform duration-300 group-hover:scale-105"
                />
            </a>

            <!-- Desktop Navigation -->
            <nav
                class="hidden md:flex items-center gap-1 text-sm lg:text-base font-medium text-gray-700"
                data-eurowash-nav
            >
                @php
                    $navLinks = [
                        ['route' => 'features', 'label' => 'Features'],
                        ['route' => 'services', 'label' => 'Services'],
                        ['route' => 'location', 'label' => 'Location'],
                        ['route' => 'about', 'label' => 'About Us'],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        @class([
                            'relative px-4 py-2 rounded-lg transition-colors duration-200 hover:text-[color:var(--color-eurowash)] group',
                            'text-[color:var(--color-eurowash)]' => request()->routeIs($link['route']),
                        ])
                    >
                        <span>{{ $link['label'] }}</span>
                        <span
                            @class([
                                'absolute left-4 right-4 -bottom-0.5 h-0.5 bg-[color:var(--color-eurowash)] rounded-full origin-left transition-transform duration-300 ease-out',
                                'scale-x-100' => request()->routeIs($link['route']),
                                'scale-x-0 group-hover:scale-x-100' => !request()->routeIs($link['route']),
                            ])
                        ></span>
                    </a>
                @endforeach
            </nav>

            <!-- Right cluster: Call CTA + optional admin menu + mobile toggle -->
            <div class="flex items-center gap-2 shrink-0">
                <a
                    href="tel:02080793035"
                    class="hidden md:inline-flex items-center gap-2 bg-[color:var(--color-eurowash)] text-white text-sm lg:text-base font-semibold px-5 py-2.5 lg:py-3 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 hover:bg-[color:var(--color-eurowash-dark)] transition-all duration-200"
                    data-eurowash-cta
                >
                    <svg class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="whitespace-nowrap">0208 079 3035</span>
                </a>

                @auth
                    @if (Auth::user()->isAdmin())
                        <flux:dropdown class="hidden md:block">
                            <flux:button icon:trailing="chevron-down" variant="ghost" size="sm">
                                {{ Auth::user()->name }}
                            </flux:button>
                            <flux:menu>
                                <flux:menu.item icon="home" href="/admin">Admin Panel</flux:menu.item>
                                <flux:menu.separator />
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <flux:menu.item as="button" type="submit" variant="danger">Logout</flux:menu.item>
                                </form>
                            </flux:menu>
                        </flux:dropdown>
                    @endif
                @endauth

                <!-- Mobile toggle -->
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    aria-label="Toggle navigation"
                    class="md:hidden inline-flex items-center justify-center w-11 h-11 rounded-lg text-[color:var(--color-eurowash)] hover:bg-gray-100 transition"
                >
                    <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div
            x-show="mobileOpen"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden pb-4"
        >
            <nav class="flex flex-col gap-1 pt-2 border-t border-gray-100">
                @foreach ($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        @class([
                            'px-4 py-3 rounded-lg text-base font-medium transition-colors',
                            'bg-[color:var(--color-eurowash)]/10 text-[color:var(--color-eurowash)]' => request()->routeIs($link['route']),
                            'text-gray-700 hover:bg-gray-50 hover:text-[color:var(--color-eurowash)]' => !request()->routeIs($link['route']),
                        ])
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <a
                    href="tel:02080793035"
                    class="mt-2 inline-flex items-center justify-center gap-2 bg-[color:var(--color-eurowash)] text-white font-semibold px-5 py-3 rounded-full shadow-sm"
                >
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    0208 079 3035
                </a>

                @auth
                    @if (Auth::user()->isAdmin())
                        <a href="/admin" class="mt-2 px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">
                            Admin Panel
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="mt-1">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-3 rounded-lg text-base font-medium text-red-600 hover:bg-red-50">
                                Logout
                            </button>
                        </form>
                    @endif
                @endauth
            </nav>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap === 'undefined') return;

        // Animate translate only. Opacity stays at CSS default (1) so nothing
        // disappears if the animation fails to run.
        gsap.from('[data-eurowash-logo]', {
            y: -8,
            duration: 0.5,
            ease: 'power2.out',
        });

        gsap.from('[data-eurowash-nav] > *', {
            y: -8,
            duration: 0.5,
            stagger: 0.06,
            delay: 0.1,
            ease: 'power2.out',
        });

        gsap.from('[data-eurowash-cta]', {
            y: -8,
            duration: 0.5,
            delay: 0.3,
            ease: 'power2.out',
        });
    });
</script>
