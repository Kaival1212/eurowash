<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 text-blue-600"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
                    />
                </svg>
                <span
                    class="text-2xl font-extrabold text-blue-800 tracking-wide"
                >
                    EUROWASH
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
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
                <a href="tel:02080793035" class="text-blue-600 font-semibold">
                    0208 079 3035
                </a>

                @guest
                <a
                    href="{{ route('login') }}"
                    class="text-gray-700 hover:text-blue-600 transition"
                    >Login</a
                >
                @else
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
                            Dashboard
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
                @endguest
            </nav>

            <!-- Mobile Navigation -->
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
                            class="block px-4 py-2 text-blue-600 font-semibold"
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
                            Dashboard
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
                        @endauth @guest
                        <flux:menu.item href="{{ route('login') }}">
                            Login
                        </flux:menu.item>
                        @endguest
                    </flux:menu>
                </flux:dropdown>
            </div>
        </div>
    </div>
</header>
