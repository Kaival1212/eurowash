<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Features extends Component
{
       #[Layout('components.layouts.app', [
        'title' => 'Eurowash | 24/7/365 Launderette in Twickenham | Self-Service & Service Wash',
        'description' => 'Discover the benefits of Eurowash 24/7/365, your go-to launderette in Twickenham. Enjoy modern, smart laundry lockers with 24/7 access, cash and cashless payment options, and a clean, friendly environment. Book your locker now for a convenient laundry experience.',
        'keywords' => 'launderette, self-service, service wash, Twickenham, 24/7, 365 days, Eurowash, laundry locker booking',
        'canonical' => 'https://eurowashlaunderette.com/features',
        'ogTitle' => 'Eurowash | 24/7/365 Launderette in Twickenham | Self-Service & Service Wash',
        'ogDescription' => 'Book a smart laundry locker at Eurowash Twickenham with 24/7 access and contactless payment.',
        'ogImage' => 'https://eurowashlaunderette.com/storage/og-image.jpg',
        'robots' => 'index, follow',
    ])]
    public function render()
    {
        return <<<'HTML'
        <div>
                <section class="py-20 bg-gray-50 border" id="features">
                    <div class="container mx-auto px-4">
                        <div class="text-center mb-16">
                            <h2
                                class="text-4xl font-bold text-blue-800 inline-block underline"
                            >
                                Why Choose Eurowash 24 7 365
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
        </div>
        HTML;
    }
}
