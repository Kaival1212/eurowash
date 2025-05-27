<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Location extends Component
{
    #[Layout('components.layouts.app', [
        'title' => 'Eurowash Location | 24/7 Launderette in Twickenham | Self-Service & Service Wash',
        'description' => 'Visit Eurowash 24/7/365 Launderette located in Twickenham, offering self-service and service wash options. Conveniently located near Twickenham Train Station and Allianz Rugby Stadium.',
        'keywords' => 'launderette Twickenham, Eurowash Twickenham, 24/7 laundry service Twickenham, self-service wash Twickenham, service wash Twickenham, contactless laundry Twickenham',
        'canonical' => 'https://eurowashlaunderette.com/location',
        'ogTitle' => 'Eurowash Location | 24/7 Launderette in Twickenham | Self-Service & Service Wash',
        'ogDescription' => 'Find Eurowash 24/7 Launderette in Twickenham offering self-service and service wash. Book a smart laundry locker or contactless laundry service today.',
        'ogImage' => 'https://eurowashlaunderette.com/storage/og-image.jpg',
        'ogUrl' => 'https://eurowashlaunderette.com/location',
        'robots' => 'index, follow'
    ])]
    public function render()
    {
        return <<<'HTML'
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
        HTML;
    }
}
