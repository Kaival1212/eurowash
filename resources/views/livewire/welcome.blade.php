<!-- Hero Section -->
<div>
    @if(session('error'))
    <div class="container mx-auto px-4 mt-6">
        <div
            class="flex items-center justify-between bg-red-100 border border-red-300 text-red-800 px-6 py-4 rounded-lg shadow-md"
        >
            <div class="flex items-center space-x-3">
                <svg
                    class="w-6 h-6 text-red-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 9v2m0 4h.01M5.455 4.545a9 9 0 0112.728 0m0 0a9 9 0 010 12.728m0 0a9 9 0 01-12.728 0m0 0a9 9 0 010-12.728"
                    />
                </svg>
                <span class="text-lg font-semibold">{{
                    session("error")
                }}</span>
            </div>
            <button
                onclick="this.parentElement.remove()"
                class="text-red-500 hover:text-red-700 text-xl font-bold"
            >
                &times;
            </button>
        </div>
    </div>
    @endif

    <section class="bg-blue-50">
        <div class="container mx-auto px-4 py-12">
            <div
                class="grid md:grid-cols-2 gap-8 items-center bg-gray-50 rounded-2xl overflow-hidden shadow-lg"
            >
                <div class="py-12 px-8 max-w-5xl mx-auto text-center">
                    <div class="mb-8">
                        <h1
                            class="text-4xl md:text-5xl font-bold text-blue-800 leading-tight"
                        >
                            EUROWASH <span class="inline-block">24 7 365</span>
                        </h1>
                        <div
                            class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6 rounded-full"
                        ></div>
                        <p
                            class="mt-4 text-xl font-semibold text-blue-600 leading-relaxed"
                        >
                            OPEN 24 HOURS A DAY, 7 DAYS A WEEK, 365 DAYS A YEAR.
                            <span class="block mt-1">— We Never Close!</span>
                        </p>
                        <p class="text-blue-600 italic mt-1">
                            Established in the 1960s
                        </p>
                    </div>

                    <div class="space-y-4">
                        <p class="text-lg text-blue-600 font-medium">
                            The current owners have been providing modern-day
                            machines for your washing and drying needs since
                            1996.
                        </p>

                        <p class="text-gray-700 text-lg leading-relaxed">
                            The first 24-hour self-service launderette in South
                            West London (and now also offering service washes)
                            with modern equipment in a safe and clean
                            environment — motivated by positive affirmations and
                            quotes for customers to reflect upon whilst waiting
                            for their laundry.
                        </p>
                    </div>

                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a
                            href="#services"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-md flex items-center justify-center"
                        >
                            <span>Our Services</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-2"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                        <a
                            href="#location"
                            class="bg-white border-2 border-blue-600 hover:bg-blue-50 text-blue-600 font-bold py-3 px-8 rounded-lg transition duration-300 shadow-md flex items-center justify-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>Find Us</span>
                        </a>
                    </div>
                </div>

                <div class="h-full">
                    <div
                        class="h-full rounded-l-xl overflow-hidden shadow-xl relative"
                    >
                        <img
                            src="{{ asset('storage/unnamed.jpg') }}"
                            alt="Eurowash Launderette Interior"
                            class="w-full h-full object-cover"
                        />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-800 to-transparent opacity-70 py-4 px-6"
                        >
                            <p class="text-white font-bold text-lg">
                                Modern Equipment &amp; Clean Environment
                            </p>
                        </div>
                    </div>
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
            <div class="grid md:grid-cols-4 gap-6">
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
                        Open 24/7 365 Days
                    </h3>
                    <p class="text-gray-700">
                        Always open when you need us, even on bank holidays and
                        RFU event days
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
                        Brand new machines and payment systems inspired by
                        morden day technology.
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
                        Cash and Cashless Payment
                    </h3>
                    <p class="text-gray-700">
                        You can pay with card or contactless payment as well as
                        coins(and customers can even exchanges bank notes for
                        coins).
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
                                d="M5 3v18M19 3v18M9 6h6M9 10h6M9 14h6M6 19h12M6 3h12"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-blue-800">
                        Vending Machines
                    </h3>
                    <p class="text-gray-700">
                        Hot & Cold drinks, confectionary available by card, bank
                        notes or coins
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-gray-50" id="services">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl font-bold text-blue-800 relative inline-block underline"
                >
                    Our Services
                </h2>
                <p class="mt-6 text-gray-600 max-w-2xl mx-auto">
                    Professional laundry solutions available 24/7/365 to suit
                    your busy lifestyle
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Self-Service Card -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1"
                >
                    <div class="bg-blue-600 h-2"></div>
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto"
                        >
                            <svg
                                class="h-8 w-8 text-blue-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm11 3a1 1 0 00-1-1H5a1 1 0 00-1 1v6a1 1 0 001 1h10a1 1 0 001-1V7z"
                                    clip-rule="evenodd"
                                ></path>
                                <path
                                    d="M7 9a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z"
                                ></path>
                            </svg>
                        </div>
                        <h3
                            class="text-2xl font-bold mb-4 text-blue-800 text-center"
                        >
                            Self-Service Wash &amp; Dry
                        </h3>
                        <ul class="space-y-3 text-gray-700 mt-6">
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Range of machine sizes available</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Perfect for all types of laundry</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>High-speed, efficient drying</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span
                                    >Detergents available to purchase
                                    in-store</span
                                >
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span
                                    >Books and thought provoking quotes to read
                                    whilst you wait</span
                                >
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 24/7 Service Wash Card -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1"
                >
                    <div class="bg-blue-600 h-2"></div>
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto"
                        >
                            <svg
                                class="h-8 w-8 text-blue-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <h3
                            class="text-2xl font-bold mb-4 text-blue-800 text-center"
                        >
                            24/7 Service Wash
                        </h3>
                        <ul class="space-y-3 text-gray-700 mt-6">
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Wash, dry &amp; fold service</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>24-hour turnaround</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Family wash, duvets</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Wash all type of sports gear</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 24/7 Laundry Lockers Card -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1"
                >
                    <div class="bg-blue-600 h-2"></div>
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto"
                        >
                            <svg
                                class="h-8 w-8 text-blue-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                        <h3
                            class="text-2xl font-bold mb-4 text-blue-800 text-center"
                        >
                            24/7 Laundry Lockers
                        </h3>
                        <ul class="space-y-3 text-gray-700 mt-6">
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Drop off anytime</span>
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span
                                    >Ready for collection within 24 hours</span
                                >
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span
                                    >Pay online and collect at your
                                    convenience</span
                                >
                            </li>
                            <li class="flex items-center">
                                <svg
                                    class="h-5 w-5 text-blue-600 mr-3 flex-shrink-0"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <span>Convenient for busy lifestyles</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold text-blue-800 relative inline-block underline"
                >
                    Smart Laundry Lockers
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Convenient, secure, and contactless laundry service at your
                    fingertips
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold shadow-md"
                            >
                                1
                            </div>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-blue-800">
                                Book a Locker Online
                            </h3>
                            <p class="mt-2 text-gray-700">
                                Reserve your locker through our online platform.
                                You will receive a confirmation email containing
                                your unique locker code.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold shadow-md"
                            >
                                2
                            </div>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-blue-800">
                                Drop Off Your Laundry
                            </h3>
                            <p class="mt-2 text-gray-700">
                                Place your laundry inside the assigned locker
                                and secure it using the code provided in the
                                confirmation email.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold shadow-md"
                            >
                                3
                            </div>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-blue-800">
                                Professional Laundry Service
                            </h3>
                            <p class="mt-2 text-gray-700">
                                Our dedicated team will wash, dry, and neatly
                                fold your garments within 24 hours before
                                returning them to the same locker.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold shadow-md"
                            >
                                4
                            </div>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-blue-800">
                                Make a Payment
                            </h3>
                            <p class="mt-2 text-gray-700">
                                Once your laundry is ready, you will receive an
                                email with a secure link to complete your
                                payment online.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white font-bold shadow-md"
                            >
                                5
                            </div>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-xl font-bold text-blue-800">
                                Collect Your Laundry
                            </h3>
                            <p class="mt-2 text-gray-700">
                                Upon successful payment, you will receive an
                                email with the updated locker code. Use it to
                                retrieve your freshly washed and dried clothes
                                at your convenience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-10">
            <a
                href="{{ route('lockers' , ['slug' => 'eurowash']) }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-md"
                >Book Now</a
            >
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
                            the A316, near the world famous RFU Rugby Stadium
                            with plenty of parking nearby.
                        </p>

                        <p class="text-gray-700 mb-4">
                            Serving customers from Hampton, Kingston,
                            Twickenham, St. Margarets, Whitton, Hounslow,
                            Staines, Southall, Hayes, and all of the London
                            Boroughs including Richmond, Hammersmith & Fulham,
                            Kensington & Chelsea, Southwark, Merton, Hounslow,
                            Hillingdon and Ealing
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
</div>
