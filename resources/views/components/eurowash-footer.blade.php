<footer
    class="bg-[color:var(--color-eurowash)] text-white py-16 text-sm leading-relaxed"
>
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-10 md:gap-12">
            <!-- Company Info -->
            <div>
                <h3
                    class="text-2xl font-bold border-b pb-2 border-[color:var(--color-eurowash)] mb-4 tracking-wide"
                >
                    EUROWASH 24 7 365
                </h3>
                <p class="mb-2 text-blue-100">Open 24 7 365 Since 1996</p>
                <p class="text-blue-100">
                    The first 24-hour self-service launderette in South West
                    London
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3
                    class="text-xl font-bold border-b pb-2 border-[color:var(--color-eurowash)] mb-4 tracking-wide"
                >
                    Quick Links
                </h3>
                <ul class="space-y-3">
                    @foreach (['features' => 'Features', 'services' =>
                    'Services', 'location' => 'Location', 'about' => 'About Us']
                    as $id => $text)
                    <li>
                        <a
                            href="#{{ $id }}"
                            class="text-blue-100 hover:text-white flex items-center transition duration-300"
                        >
                            <svg
                                class="h-4 w-4 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                            {{ $text }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact Us -->
            <div>
                <h3
                    class="text-xl font-bold border-b pb-2 border-[color:var(--color-eurowash)] mb-4 tracking-wide"
                >
                    Contact Us
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <div
                            class="p-2 rounded-full mr-3 bg-[color:var(--color-eurowash)]"
                        >
                            <svg
                                class="h-5 w-5"
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
                        </div>
                        <a
                            href="tel:02080793035"
                            class="text-blue-100 hover:text-white transition"
                            >0208 079 3035</a
                        >
                    </li>
                    <li class="flex items-center">
                        <div
                            class="p-2 rounded-full mr-3 bg-[color:var(--color-eurowash)]"
                        >
                            <svg
                                class="h-5 w-5"
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
                        </div>
                        <a
                            href="mailto:eurowashcentre@gmail.com"
                            class="text-blue-100 hover:text-white transition"
                            >eurowashcentre@gmail.com</a
                        >
                    </li>
                    <li class="flex items-start">
                        <div
                            class="p-2 rounded-full mr-3 mt-1 bg-[color:var(--color-eurowash)]"
                        >
                            <svg
                                class="h-5 w-5"
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
                        </div>
                        <address class="not-italic text-blue-100">
                            99 Whitton Road<br />Twickenham<br />TW1 1BZ
                        </address>
                    </li>
                </ul>
            </div>

            <!-- Opening Hours -->
            <div>
                <h3
                    class="text-xl font-bold border-b pb-2 border-[color:var(--color-eurowash)] mb-4 tracking-wide"
                >
                    Opening Hours
                </h3>
                <div
                    class="bg-[color:var(--color-eurowash)] rounded-xl p-4 shadow-lg"
                >
                    <div class="flex items-center mb-4">
                        <svg
                            class="h-6 w-6 mr-2"
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
                        <span class="font-semibold">Always Open</span>
                    </div>
                    <p class="text-blue-100 leading-snug">
                        Open 24 hours a day,<br />7 days a week,<br />365 days a
                        year.
                    </p>
                    <div class="mt-4 text-center">
                        <span
                            class="bg-[color:var(--color-eurowash)] px-3 py-1 rounded-full text-sm font-medium"
                        >
                            We Never Close!
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statutory Info -->
        <div
            class="mt-12 pt-6 border-t border-[color:var(--color-eurowash)] text-center text-blue-200 space-y-2 max-w-4xl mx-auto"
        >
            <h4 class="text-base font-semibold text-white tracking-wide">
                STATUTORY INFORMATION
            </h4>
            <p>
                Eurowash 24 7 365 is a trading name of the Eurowash partnership.
            </p>
            <p>The Eurowash partnership is registered in England & Wales.</p>
            <p>
                Eurowash is VAT registered with registration number
                <strong>473029690</strong>.
            </p>
        </div>

        <!-- Bottom Links -->
        <div
            class="mt-12 pt-6 border-t border-[color:var(--color-eurowash)] text-center"
        >
            <div class="mb-4">
                <a
                    href="#privacy"
                    class="text-blue-200 hover:text-white mx-3 text-sm underline"
                    >Privacy Policy</a
                >
                <a
                    href="#terms"
                    class="text-blue-200 hover:text-white mx-3 text-sm underline"
                    >Terms of Service</a
                >
            </div>
            <p class="text-blue-200">
                &copy; 2025 Eurowash Centre. All rights reserved.
            </p>
        </div>
    </div>
</footer>
