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
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-blue-800">
                        EUROWASH CENTRE
                    </h1>
                    <p class="mt-4 text-xl font-semibold text-blue-600">
                        OPEN 24/7 - We Never Close!
                        <br />
                        Open since 1960s
                        <br />
                        Ben has run it since 1996
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
                        Open 24x7 365 Days
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
                        You can pay with coins, card, or contactless payment.
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
                            Detergents available to purchase in-store
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
                            Perfect for all types of laundry.
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4 text-blue-800">
                        24/7 Service Wash
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
                            Call us for more information
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
                            Ready for collection within 24 hours
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
                            Pay online and collect at your convenience
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
                                Book a Locker Online
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Reserve your locker through our online platform.
                                You will receive a confirmation email containing
                                your unique locker code.
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
                                Drop Off Your Laundry
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Place your laundry inside the assigned locker
                                and secure it using the code provided in the
                                confirmation email.
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
                                Professional Laundry Service
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Our dedicated team will wash, dry, and neatly
                                fold your garments within 24 hours before
                                returning them to the same locker.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold"
                            >
                                4
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-blue-800">
                                Make a Payment
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Once your laundry is ready, you will receive an
                                email with a secure link to complete your
                                payment online.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold"
                            >
                                5
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-blue-800">
                                Collect Your Laundry
                            </h3>
                            <p class="mt-1 text-gray-700">
                                Upon successful payment, you will receive an
                                email with the updated locker code. Use it to
                                retrieve your freshly laundered items at your
                                convenience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <a
                href="{{ route('lockers' , ['slug' => 'eurowash']) }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300"
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
</div>
