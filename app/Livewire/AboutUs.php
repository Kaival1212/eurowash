<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;


class AboutUs extends Component
{
        #[Layout('components.layouts.app', [
        'title' => 'Eurowash | About Us - 24/7 Launderette in Twickenham | Self-Service & Service Wash',
        'description' => 'Learn more about Eurowash, the 24/7 launderette in Twickenham offering self-service and service wash. Modern facilities, open every day of the year.',
        'keywords' => 'launderette, self-service laundry, service wash, Twickenham, 24/7 laundry, smart lockers, contactless payment',
        'canonical' => 'https://eurowashlaunderette.com/about-us',
        'ogTitle' => 'Eurowash | About Us - 24/7 Launderette in Twickenham | Self-Service & Service Wash',
        'ogDescription' => 'Learn more about Eurowash, the 24/7 launderette in Twickenham offering self-service and service wash. Modern facilities, open every day of the year.',
        'robots' => 'index, follow'
    ])]
    public function render()
    {
        return <<<'HTML'
        <section id="about" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-3">
                        About Us
                    </h2>
                    <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                    <!-- Info Panel -->
                    <div
                        class="bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-gray-100 transform transition duration-300 hover:shadow-xl"
                    >
                        <div class="space-y-6 text-gray-700">
                            <div>
                                <h3
                                    class="text-xl font-semibold text-blue-700 mb-3"
                                >
                                    Our Heritage
                                </h3>
                                <p class="leading-relaxed">
                                    Eurowash was established in the 1960s and the
                                    current owners have been providing gas, water,
                                    and electric for the local community's washing
                                    and drying needs since 1996.
                                </p>
                            </div>

                            <div>
                                <h3
                                    class="text-xl font-semibold text-blue-700 mb-3"
                                >
                                    Modern Innovation
                                </h3>
                                <p class="leading-relaxed">
                                    Eurowash 24 7 365 is the first 24-hour
                                    self-service launderette in South West London.
                                    The owners have embraced modern technology to
                                    serve your needs — upgrading machines for higher
                                    capacity and better quality, supporting
                                    contactless/card payments, and extending opening
                                    hours so you can wash and dry any time, day or
                                    night.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Video Panel -->
                    <div
                        class="rounded-2xl overflow-hidden shadow-lg h-full w-full transform transition duration-300 hover:shadow-xl group"
                    >
                        <div class="relative h-full w-full">
                            <video
                                class="w-full h-full object-cover"
                                autoplay
                                muted
                                loop
                                playsinline
                            >
                                <source
                                    src="{{ asset('storage/EuroWashVideo.mp4') }}"
                                    type="video/mp4"
                                />
                                Your browser does not support the video tag.
                            </video>
                            <!-- Optional Video Overlay -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        HTML;
    }
}
