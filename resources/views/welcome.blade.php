<x-layouts.app
    title="Eurowash | 24/7/365 Launderette in Twickenham | Self-Service & Service Wash"
    description="Eurowash Centre - Open 24/7/365 launderette in Twickenham offering self-service washing, service wash, and 24/24 laundry lockers. Visit us at 99 Whitton Rd, TW1 1BZ."
>
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 text-blue-600 mr-2"
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
                        <span class="text-2xl font-bold text-blue-800"
                            >EUROWASH</span
                        >
                    </a>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a
                        href="#features"
                        class="text-gray-700 hover:text-blue-600 font-medium"
                        >Features</a
                    >
                    <a
                        href="#services"
                        class="text-gray-700 hover:text-blue-600 font-medium"
                        >Services</a
                    >
                    <a
                        href="#location"
                        class="text-gray-700 hover:text-blue-600 font-medium"
                        >Location</a
                    >
                    <a
                        href="tel:02080793035"
                        class="text-blue-600 font-bold hover:underline"
                        >0208 079 3035</a
                    >
                </nav>
                <div class="md:hidden">
                    <button
                        type="button"
                        class="text-gray-700 hover:text-blue-600 focus:outline-none"
                        id="mobile-menu-button"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-50">
                <a
                    href="#features"
                    class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md"
                    >Features</a
                >
                <a
                    href="#services"
                    class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md"
                    >Services</a
                >
                <a
                    href="#location"
                    class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md"
                    >Location</a
                >
                <a
                    href="tel:02080793035"
                    class="block px-3 py-2 text-blue-600 font-bold hover:bg-blue-50 rounded-md"
                    >0208 079 3035</a
                >
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-50">
        <div class="container mx-auto px-4 py-12">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-blue-800">
                        EUROWASH CENTRE
                    </h1>
                    <p class="mt-4 text-xl font-semibold text-blue-600">
                        OPEN 24/7 Since 1996 - We Never Close!
                    </p>
                    <p class="mt-2 text-gray-700 text-lg">
                        The go-to launderette in SW London with quality
                        equipment and premium ambience.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <a
                            href="#services"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300"
                            >Our Services</a
                        >
                        <a
                            href="#location"
                            class="bg-white border-2 border-blue-600 hover:bg-blue-50 text-blue-600 font-bold py-3 px-6 rounded-lg transition duration-300"
                            >Find Us</a
                        >
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl">
                    <img
                        src="{{ asset('storage/unnamed.jpg') }}"
                        alt="Eurowash Launderette Interior"
                        class="w-full h-auto"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-12 bg-white" id="features">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">
                Why Choose Eurowash?
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-blue-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">
                        Open 24/7/365
                    </h3>
                    <p class="text-gray-700">
                        Always open when you need us, even on holidays.
                    </p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-blue-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">
                        Modern Equipment
                    </h3>
                    <p class="text-gray-700">
                        Brand new machines including 21KG Super Spin.
                    </p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-blue-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">
                        Contactless Payment
                    </h3>
                    <p class="text-gray-700">
                        Card, phone, or coin operated machines.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-12 bg-gray-50" id="services">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">
                Our Services
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4 text-blue-800">
                        Self-Service Wash & Dry
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Range of machine sizes available
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            High-speed, efficient drying
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Detergents available to purchase
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Perfect for duvets & large loads
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4 text-blue-800">
                        24/24 Service Wash
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Wash, dry & fold service
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            24-hour turnaround
                        </li>
                        <!-- <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Attended by nSimba Mon-Fri 10am-2pm
                        </li> -->
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Family wash, duvets, football kits
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4 text-blue-800">
                        24/7 Laundry Lockers
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Drop off anytime
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Collect within 24 hours
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Secure locker system
                        </li>
                        <li class="flex items-center">
                            <svg
                                class="h-5 w-5 text-blue-600 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            Convenient for busy lifestyles
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">
                How It Works
            </h2>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold"
                            >
                                1
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-blue-800">
                                Drop Off
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Drop off your washing at any time that suits you
                                into one of our in-store 24/7/365 LAUNDRY
                                LOCKERS.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold"
                            >
                                2
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-blue-800">
                                We Do The Work
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Our team will wash, dry, and fold your laundry
                                within 24 hours. For self-service, use our
                                high-quality machines at your convenience.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold"
                            >
                                3
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-blue-800">
                                Pick Up
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Collect your clean, fresh laundry from the same
                                locker at any time that suits you within 24
                                hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-12 bg-gray-50" id="location">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">
                Find Us
            </h2>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-blue-800">
                            Address
                        </h3>
                        <p class="text-gray-700 mb-4">
                            <span class="font-bold">99 Whitton Road</span><br />
                            Twickenham<br />
                            TW1 1BZ
                        </p>

                        <h3 class="text-xl font-bold mb-4 text-blue-800">
                            Location
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Conveniently located between Twickenham Station and
                            the A316, near the world famous RFU Rugby Ground
                            with plenty of parking nearby.
                        </p>

                        <h3 class="text-xl font-bold mb-4 text-blue-800">
                            Contact
                        </h3>
                        <p class="text-gray-700">
                            Phone/WhatsApp:
                            <a
                                href="tel:02080793035"
                                class="text-blue-600 hover:underline"
                                >0208 079 3035</a
                            ><br />
                            Email:
                            <a
                                href="mailto:eurowashcentre@gmail.com"
                                class="text-blue-600 hover:underline"
                                >eurowashcentre@gmail.com</a
                            >
                        </p>
                    </div>
                </div>
                <div
                    class="h-96 bg-gray-200 rounded-lg overflow-hidden shadow-md"
                >
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.261651489994!2d-0.34092190209136713!3d51.45335229909268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760cf3728313e9%3A0x64b24e12b18d9d7e!2sEurowash%2024%207%20365!5e0!3m2!1sen!2suk!4v1743684821285!5m2!1sen!2suk"
                        width="600"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">EUROWASH CENTRE</h3>
                    <p class="mb-2">Open 24/7/365 Since 1996</p>
                    <p>The premium launderette experience in Twickenham.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <a
                                href="#features"
                                class="hover:text-blue-300 transition duration-300"
                                >Features</a
                            >
                        </li>
                        <li>
                            <a
                                href="#services"
                                class="hover:text-blue-300 transition duration-300"
                                >Services</a
                            >
                        </li>
                        <li>
                            <a
                                href="#location"
                                class="hover:text-blue-300 transition duration-300"
                                >Location</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
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
                            <a
                                href="tel:02080793035"
                                class="hover:text-blue-300 transition duration-300"
                                >0208 079 3035</a
                            >
                        </li>
                        <li class="flex items-center">
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
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />
                            </svg>
                            <a
                                href="mailto:eurowashcentre@gmail.com"
                                class="hover:text-blue-300 transition duration-300"
                                >eurowashcentre@gmail.com</a
                            >
                        </li>
                        <li class="flex items-start">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2 mt-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                            </svg>
                            <address class="not-italic">
                                99 Whitton Road<br />
                                Twickenham<br />
                                TW1 1BZ
                            </address>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Opening Hours</h3>
                    <p class="mb-4">
                        Open 24 hours a day, 7 days a week, 365 days a year.
                    </p>
                    <p class="mb-2">Attended Service:</p>
                    <p>Monday to Friday: 10am - 2pm</p>
                </div>
            </div>
            <div class="border-t border-blue-700 mt-8 pt-8 text-center">
                <p>&copy; 2025 Eurowash Centre. All rights reserved.</p>
            </div>
        </div>
    </footer>
</x-layouts.app>
