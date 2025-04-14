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

    <!-- HERO SECTION -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto px-4">
            <div
                class="grid md:grid-cols-2 gap-8 items-center bg-white rounded-3xl shadow-xl overflow-hidden"
            >
                <div class="p-10">
                    <h1 class="text-5xl font-bold text-blue-800 leading-snug">
                        EUROWASH <span class="block">24 7 365</span>
                    </h1>
                    <div class="w-24 h-1 bg-blue-600 my-6 rounded-full"></div>
                    <p
                        class="text-xl font-semibold text-blue-600 leading-relaxed"
                    >
                        EUROWASH 24 7 365 IS A SELF-SERVICE LAUNDERETTE, OPEN 24
                        HOURS A DAY, 7 DAYS A WEEK, 365 DAYS A YEAR!
                    </p>
                    <p class="text-blue-600 italic mt-2">
                        Established in the 1960s
                    </p>

                    <div class="mt-6 space-y-4">
                        <p class="text-lg text-blue-600 font-medium">
                            The current owners have been providing modern-day
                            machines for your washing and drying needs since
                            1996.
                        </p>
                        <p class="text-gray-700 text-lg">
                            The first 24-hour self-service launderette in South
                            West London (and now also offering service washes)
                            with modern equipment in a safe and clean
                            environment — motivated by positive affirmations and
                            quotes for customers to reflect upon whilst waiting
                            for their laundry.
                        </p>
                    </div>

                    <div
                        class="mt-8 flex flex-wrap gap-4 justify-center md:justify-start"
                    >
                        <a
                            href="#services"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition flex items-center"
                        >
                            Our Services
                            <svg
                                class="h-5 w-5 ml-2"
                                xmlns="http://www.w3.org/2000/svg"
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
                            class="bg-white border-2 border-blue-600 hover:bg-blue-50 text-blue-600 font-bold py-3 px-6 rounded-lg shadow-md transition flex items-center"
                        >
                            <svg
                                class="h-5 w-5 mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Find Us
                        </a>
                    </div>
                </div>
                <div class="h-full">
                    <div class="relative h-full">
                        <img
                            src="{{ asset('storage/unnamed.jpg') }}"
                            alt="Eurowash Interior"
                            class="w-full h-full object-cover"
                        />
                        <div
                            class="absolute bottom-0 w-full bg-gradient-to-t from-blue-800 to-transparent p-4"
                        >
                            <p class="text-white text-lg font-semibold">
                                Modern Equipment &amp; Clean Environment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white border" id="services">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl font-bold text-blue-800 inline-block underline"
                >
                    Our Services
                </h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Eurowash 24 7 365 is a clean, safe and friendly self-service
                    launderette; monitored by CCTV and personal attendance.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-10">
                <!-- Card Template -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
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
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-blue-800 text-center mb-4"
                    >
                        24-7-365 Self-Service Laundry
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-base">
                        @foreach([ 'Easy to operate Washing Machines and Tumble
                        Dryers', 'Machine and Dryers accept coins, card any
                        payments from contactless devices', 'Washing Machines
                        range form handling up to 14kg, 20kg and 22kg loads',
                        'Tumble Dryers range from handling up to 13.5kg and
                        20kg', 'Machines are therefore suitable for all types of
                        laundry; whether it be commercial or domestic',
                        "Machines are set to 'high spin', thereby being the most
                        effcient and cost effective", 'Detergents available to
                        purchase in-store', 'Books and thought provoking quotes
                        to read whilst you wait!' ] as $feature)
                        <li class="flex items-start gap-3">
                            <svg
                                class="h-5 w-5 text-blue-600 mt-1 flex-shrink-0"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- 24-Hour Service Washes Card -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
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
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-blue-800 text-center mb-4"
                    >
                        24-Hour Service Washes
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-base">
                        <li class="flex items-start gap-3">
                            <svg
                                class="h-5 w-5 text-blue-600 mt-1 flex-shrink-0"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span
                                >Wash, Dry and fold by our professional
                                team,24-hour turnaround</span
                            >
                        </li>
                        <li class="flex items-start gap-3">
                            <svg
                                class="h-5 w-5 text-blue-600 mt-1 flex-shrink-0"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>
                                Hassle free - just 'drop and collect' via our
                                <a
                                    href="{{ route('eurowash.lockers') }}"
                                    class="text-blue-600 underline font-medium"
                                >
                                    24-7 Smart Laundry Lockers (please click to
                                    book)
                                </a>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg
                                class="h-5 w-5 text-blue-600 mt-1 flex-shrink-0"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>
                                Suitable for all types of laundry; whether it be
                                commercial (including all types of sports gear)
                                or domectic (including a simple family wash or
                                duvets)
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg
                                class="h-5 w-5 text-blue-600 mt-1 flex-shrink-0"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>Convenient for busy lifestyles</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-20 bg-gray-50 border" id="features">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl font-bold text-blue-800 inline-block underline"
                >
                    Unique Selling Points – Why Choose Eurowash 24 7 365
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
                    >
                        <svg
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
                    <h3
                        class="text-xl font-bold text-blue-800 text-center mb-2"
                    >
                        Open 24/7 365 Days
                    </h3>
                    <p class="text-gray-700 text-center">
                        Always open, even on bank holidays and RFU event days
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
                    >
                        <svg
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
                    <h3
                        class="text-xl font-bold text-blue-800 text-center mb-2"
                    >
                        Modern Equipment
                    </h3>
                    <p class="text-gray-700 text-center">
                        Brand new upgrades machines and payment systems.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
                    >
                        <svg
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
                    <h3
                        class="text-xl font-bold text-blue-800 text-center mb-2"
                    >
                        Cash and Cashless Payment
                    </h3>
                    <p class="text-gray-700 text-center">
                        You can pay with card or contactless payment as well as
                        coins. Customers can even exchanges bank notes for
                        coins.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
                    >
                        <svg
                            class="h-8 w-8 text-blue-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-blue-800 text-center mb-2"
                    >
                        Vending Machines
                    </h3>
                    <p class="text-gray-700 text-center">
                        Hot & Cold drinks available, as well as confectionery
                    </p>
                </div>

                <!-- Feature 5 -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
                    >
                        <svg
                            class="h-8 w-8 text-blue-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-blue-800 text-center mb-2"
                    >
                        Clean & Friendly
                    </h3>
                    <p class="text-gray-700 text-center">
                        With a "tidy room,[there is a] tidy mind" and Eurowash
                        24 7 365 is cleaned daily for you to wash and dry in a
                        clean and friendly environment.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div
                    class="bg-white rounded-3xl shadow-md hover:shadow-xl transition-transform hover:-translate-y-1 border-t-4 border-blue-600 p-8"
                >
                    <div
                        class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6"
                    >
                        <svg
                            class="h-8 w-8 text-blue-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-blue-800 text-center mb-2"
                    >
                        Inspiring Quotes & Books
                    </h3>
                    <p class="text-gray-700 text-center">
                        Inspiring and thought provoking quotes and books for
                        customers to refelect upon whilst they wait for thier
                        laundry to be done - "You will be the same person in
                        five years as you are tody except for the people you
                        meet and the books you read".
                    </p>
                </div>
            </div>

            <div
                class="mt-12 max-w-4xl mx-auto text-center text-gray-700 text-base leading-relaxed px-4"
            >
                <p>
                    Eurowash 24 7 365 is proud to serve all residents, employees
                    and visitors to all of the London Boroughs including (but
                    not limited to) Ealing, Hammersmith & Fulham, Hillingdon,
                    Hounslow, Kensington & Chelsea, Richmond, Merton and
                    Southwark. Customers from Barnes, Barons Court, Brentford,
                    Brompton, Chessington, Chiswick, Colliers Wood, Datchet,
                    Feltham, Hampton, Hayes, Heathrow, Heston, Hounslow,
                    Isleworth, Kingston, Knightsbridge, Mortlake, New Malden,
                    Notting Hill, Raynes Park, Shepherd's Bush, Slough,
                    Southall, St. Margarets, Staines, Twickenham, Uxbridge, West
                    Kensington, Whitton, Wimbledon, Windsor and afar are
                    therefore most welcome!
                </p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto text-center">
                <h2
                    class="text-4xl font-bold text-blue-800 mb-6 underline decoration-2"
                >
                    About Us
                </h2>
            </div>

            <div
                class="bg-white rounded-3xl shadow-lg border p-10 max-w-5xl mx-auto"
            >
                <div class="space-y-8 text-gray-700 text-lg leading-relaxed">
                    <div>
                        <h3 class="text-2xl font-semibold text-blue-800 mb-2">
                            The History
                        </h3>
                        <p>
                            Eurowash was established in the 1960s and the
                            current owners have been providing gas, water and
                            electric for the local community’s washing and
                            drying needs since 1996.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-blue-800 mb-2">
                            The Present
                        </h3>
                        <p>
                            Eurowash 24 7 365 is the first 24 hour self-service
                            launderette in South West London. The owners have
                            embraced and utilised modern day technology in order
                            to serve and provide for your diverse needs whether
                            it be by upgrading machines for a bigger capacity,
                            increased quality and cost effective wash and dry,
                            implementing modern day payment systems to
                            accommodate contactless / card pay and extending
                            opening hours to 24 hours a day, 365 days a year so
                            you can ‘wash and dry around the clock’.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 bg-gray-50" id="location">
        <div class="container mx-auto px-4">
            <h2
                class="text-4xl font-bold text-center text-blue-800 underline decoration-2 mb-12"
            >
                Find Us
            </h2>

            <div
                class="grid md:grid-cols-2 gap-12 items-start justify-center items-center"
            >
                <!-- Info Panel -->
                <div
                    class="bg-white p-10 rounded-3xl shadow-md space-y-6 text-gray-700"
                >
                    <div>
                        <h3 class="text-2xl font-bold text-blue-800 mb-2">
                            Address
                        </h3>
                        <p>
                            <span class="font-bold">99 Whitton Road,</span
                            ><br />
                            Twickenham,<br />
                            TW1 1BZ
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-blue-800 mb-2">
                            Location
                        </h3>
                        <p>
                            Eurowash 24 7 365 is conveniently located on Whitton
                            Road (B361), Twickenham.<br />
                            Opposite Bus Stop (R) and adjacent to Bus Stop (M)
                            for routes 281 and 681 between Twickenham Train
                            Station and the A316 Chertsey Road.<br />
                            Near the world-famous Twickenham Rugby Stadium
                            (Allianz Stadium Twickenham).
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-blue-800 mb-2">
                            Parking
                        </h3>
                        <p>
                            Whitton Road is under a Controlled Parking Zone
                            (08:30–18:30, Mon–Sat, excluding Bank Holidays).<br />
                            Restrictions may vary on RFU Event Days.<br />
                            Customers can use ‘Pay & Display’ bays on Whitton
                            Road, Chudleigh Road, and Erncroft Way.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-blue-800 mb-2">
                            Contact Us
                        </h3>
                        <p class="space-y-2">
                            <strong>Phone / WhatsApp:</strong>
                            <a
                                href="tel:02080793035"
                                class="text-blue-700 font-semibold"
                                >02080793035</a
                            ><br />
                            <strong>Email:</strong>
                            <a
                                href="mailto:eurowashcentre@gmail.com"
                                class="text-blue-700 font-semibold"
                                >eurowashcentre@gmail.com</a
                            ><br />
                            <strong>Opening Hours:</strong> Open 24 hours a day,
                            7 days a week, 365 days a year.
                        </p>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="rounded-3xl overflow-hidden shadow-md h-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.261651489994!2d-0.34092190209136713!3d51.45335229909268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760cf3728313e9%3A0x64b24e12b18d9d7e!2sEurowash%2024%207%20365!5e0!3m2!1sen!2suk!4v1743684821285!5m2!1sen!2suk"
                        width="100%"
                        height="100%"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
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
                    24-7 Smart Laundry Lockers
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Use Eurowash 24 7 365’s ‘Smart Laundry Lockers’ for you to
                    ‘drop and collect’ your laundry in order for Eurowash 24 7
                    365’s laundry team provide a convenient, secure, and
                    contactless laundry service at your fingertips.
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
                                Eurowash 24 7 365 Laundry Service
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

        <div class="max-w-3xl mx-auto text-center text-sm text-gray-500 mt-16">
            <p>
                <strong>Terms & Conditions</strong> — Updated Terms & Conditions
                coming soon…
            </p>
        </div>
        <div class="flex justify-center mt-10">
            <a
                href="{{ route('eurowash.lockers') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-md"
                >Book Now</a
            >
        </div>
    </section>
</div>
