<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Services extends Component
{

        #[Layout('components.layouts.app', [
        'title' => 'Eurowash | 24/7/365 Launderette in Twickenham | Self-Service & Service Wash',
        'description' => 'Eurowash is a 24/7/365 launderette in Twickenham offering self-service and service wash options. Book a smart laundry locker for convenient, contactless laundry.',
        'image' => 'https://eurowashlaunderette.com/storage/og-image.jpg',
        'type' => 'website',
        'keywords' => 'launderette, self-service laundry, service wash, Twickenham, 24/7 laundry, smart lockers, contactless payment',
        'canonical' => 'https://eurowashlaunderette.com/services',
        'ogType' => 'website',
        'ogUrl' => 'https://eurowashlaunderette.com/services',
        'ogTitle' => 'Eurowash | 24/7/365 Launderette in Twickenham | Self-Service & Service Wash',
        'ogDescription' => 'Eurowash is a 24/7/365 launderette in Twickenham offering self-service and service wash options. Book a smart laundry locker for convenient, contactless laundry.',
        'ogImage' => 'https://eurowashlaunderette.com/storage/og-image.jpg',
        'robots' => 'index, follow',
    ])]
    public function render()
    {
        return <<<'HTML'
        <section class="py-16 md:py-24 bg-white" id="services">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-3">
                        Our Services
                    </h2>
                    <div
                        class="w-24 h-1 bg-blue-500 mx-auto rounded-full mb-6"
                    ></div>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Eurowash 24 7 365 is a clean, safe and friendly self-service
                        launderette; monitored by CCTV and personal attendance.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <!-- Self-Service Laundry Card -->
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 overflow-hidden"
                    >
                        <div class="h-48 overflow-hidden">
                            <img
                                src="{{ asset('storage/download.png') }}"
                                alt="Self-Service Laundry Machines"
                                class="w-full h-full object-cover transform hover:scale-105 transition duration-500"
                            />
                        </div>
                        <div class="p-6 md:p-8 border-t-4 border-blue-600">
                            <h3 class="text-2xl font-bold text-blue-800 mb-4">
                                24-7-365 Self-Service Laundry
                            </h3>
                            <ul class="space-y-3 text-gray-700">
                                @foreach([ 'Easy to operate Washing Machines and
                                Tumble Dryers', 'Machine and Dryers accept coins,
                                card any payments from contactless devices',
                                'Washing Machines range form handling up to 14kg,
                                20kg and 22kg loads', 'Tumble Dryers range from
                                handling up to 13.5kg and 20kg', 'Machines are
                                therefore suitable for all types of laundry; whether
                                it be commercial or domestic', "Machines are set to
                                'high spin', thereby being the most effcient and
                                cost effective", 'Detergents available to purchase
                                in-store', 'Books and thought provoking quotes to
                                read whilst you wait!' ] as $feature)
                                <li class="flex items-start gap-2">
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
                    </div>

                    <!-- 24-Hour Service Washes Card -->
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1 overflow-hidden"
                    >
                        <div class="h-48 overflow-hidden">
                            <img
                                src="{{ asset('storage/servicewash.jpeg') }}"
                                alt="Professional Laundry Service"
                                class="w-full h-full object-cover transform hover:scale-105 transition duration-500"
                            />
                        </div>
                        <div class="p-6 md:p-8 border-t-4 border-blue-600">
                            <h3 class="text-2xl font-bold text-blue-800 mb-4">
                                24-Hour Service Washes
                            </h3>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start gap-2">
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
                                        team, 24-hour turnaround</span
                                    >
                                </li>
                                <li class="flex items-start gap-2">
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
                                        Hassle free - just 'drop and collect' via
                                        our
                                        <a
                                            href="{{ route('eurowash.lockers') }}"
                                            class="text-blue-600 hover:text-blue-800 font-medium"
                                        >
                                            24-7 Smart Laundry Lockers (please click
                                            to book)
                                        </a>
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
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
                                        Suitable for all types of laundry; whether
                                        it be commercial (including all types of
                                        sports gear) or domectic (including a simple
                                        family wash or duvets)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
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
            </div>
        </section>
        HTML;
    }
}
