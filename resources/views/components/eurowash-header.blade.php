<header class="bg-white shadow-md sticky top-0 z-50">
    <!-- Announcement Bar -->
    <div class="bg-blue-600 text-white text-center py-2 text-sm sm:text-base">
        <span
            >🚨 Our Smart Locker Service is Live! 🎉 🚨</span
        >
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a
                href="{{ route('home') }}"
                class="flex items-center space-x-4 group"
            >
                <img
                    src="{{ asset('storage/TitleLogo.png') }}"
                    alt="Eurowash Logo"
                    class="h-14 w-auto sm:h-16 md:h-20 transition-transform duration-300 scale-150 md:scale-205"
                />
                <!-- <span
                    class="hidden md:inline-block text-xl lg:text-2xl font-extrabold text-blue-800 tracking-wide"
                >
                    EUROWASH 24 7 365
                </span> -->
            </a>

            <!-- Desktop Navigation -->
            <nav
                class="hidden md:flex items-center space-x-8 text-base lg:text-lg font-bold tracking-wide text-blue-800"
            >
                <a
                    href="{{ route('features') }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    Features
                </a>
                <a
                    href="{{ route('services') }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    Services
                </a>
                <a
                    href="{{ route('location') }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    Location
                </a>
                <a
                    href="{{ route('about') }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    About Us
                </a>
                <a
                    href="{{ route('howitworks') }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                >
                    How It Works
                </a>
                <div class="hidden md:flex items-center">
                    <a
                        href="tel:02080793035"
                        class="flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-150"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                            />
                        </svg>
                        0208 079 3035
                    </a>
                </div>

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
                    <flux:menu class="text-sm">
                        <a
                            href="{{ route('features') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            Features
                        </a>
                        <a
                            href="{{ route('services') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            Services
                        </a>
                        <a
                            href="{{ route('location') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            Location
                        </a>
                        <a
                            href="{{ route('howitworks') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-100"
                        >
                            How It Works
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
                        @endauth
                        {{-- No login/signup for public users --}}
                    </flux:menu>
                </flux:dropdown>
            </div>
        </div>
    </div>
</header>
