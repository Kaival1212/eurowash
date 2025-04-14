<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <img
                    src="{{ asset('storage/TitleLogo.png') }}"
                    alt="Eurowash Logo"
                    class="h-20 w-auto"
                />
                <span
                    class="text-xl sm:text-2xl font-extrabold text-blue-800 hidden md:block"
                >
                    EUROWASH 24 7 365
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav
                class="hidden md:flex items-center space-x-6 text-sm font-medium"
            >
                <a
                    href="{{ route('home') . '#features' }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    Features
                </a>
                <a
                    href="{{ route('home') . '#services' }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    Services
                </a>
                <a
                    href="{{ route('home') . '#location' }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    Location
                </a>
                <a href="tel:02080793035" class="text-blue-700 font-semibold">
                    0208 079 3035
                </a>

                @auth @if (Auth::user()->isEmployee() ||
                Auth::user()->isAdmin())
                <flux:dropdown>
                    <flux:button icon:trailing="chevron-down">
                        {{ Auth::user()->name }}
                    </flux:button>
                    <flux:menu>
                        @if (Auth::user()->isEmployee())
                        <flux:menu.item
                            icon="home"
                            href="{{ route('dashboard') }}"
                        >
                            Dashboard
                        </flux:menu.item>
                        @endif @if (Auth::user()->isAdmin())
                        <flux:menu.item icon="home" href="/admin">
                            Admin Panel
                        </flux:menu.item>
                        @endif
                        <flux:menu.separator />
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <flux:menu.item
                                as="button"
                                type="submit"
                                variant="danger"
                            >
                                Logout
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
                @endif @endauth
            </nav>

            <!-- Mobile Menu -->
            <div class="md:hidden">
                <flux:dropdown>
                    <flux:button>Menu</flux:button>
                    <flux:menu>
                        <a
                            href="{{ route('home') . '#features' }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            Features
                        </a>
                        <a
                            href="{{ route('home') . '#services' }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            Services
                        </a>
                        <a
                            href="{{ route('home') . '#location' }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            Location
                        </a>
                        <a
                            href="tel:02080793035"
                            class="block px-4 py-2 text-blue-700 font-semibold"
                        >
                            0208 079 3035
                        </a>

                        @auth @if (Auth::user()->isEmployee())
                        <flux:menu.item
                            icon="home"
                            href="{{ route('dashboard') }}"
                        >
                            Dashboard
                        </flux:menu.item>
                        @endif @if (Auth::user()->isAdmin())
                        <flux:menu.item icon="home" href="/admin">
                            Admin Panel
                        </flux:menu.item>
                        @endif
                        <flux:menu.separator />
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <flux:menu.item
                                as="button"
                                type="submit"
                                variant="danger"
                            >
                                Logout
                            </flux:menu.item>
                        </form>
                        @endif
                        {{-- No login/signup for public users --}}
                    </flux:menu>
                </flux:dropdown>
            </div>
        </div>
    </div>
</header>
