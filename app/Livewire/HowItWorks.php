<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class HowItWorks extends Component
{
        #[Layout('components.layouts.app', [
        'title' => 'How Eurowash Works | 24/7 Self-Service & Service Wash in Twickenham',
        'description' => 'Learn how Eurowash 24/7 laundry service works. Reserve a locker, drop off your laundry, make a payment, and pick up your clean clothes. Convenient, secure, and contactless laundry service at your fingertips.',
        'keywords' => 'how eurowash works, 24/7 laundry service, smart laundry lockers, self-service laundry, service wash, laundry service Twickenham',
        'canonical' => 'https://eurowashlaunderette.com/how-it-works',
        'ogTitle' => 'How Eurowash Works | 24/7 Self-Service & Service Wash in Twickenham',
        'ogDescription' => 'Learn how Eurowash 24/7 laundry service works. Reserve a locker, drop off your laundry, make a payment, and pick up your clean clothes. Convenient, secure, and contactless laundry service at your fingertips.',
        'ogImage' => 'https://eurowashlaunderette.com/storage/og-image.jpg',
        'robots' => 'index, follow'
    ])]
    public function render()
    {
        return <<<'HTML'
            <section class="py-12 bg-white" id="howitworks">
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
                        href="#"
                        class="bg-blue-600 text-white font-bold py-3 px-8 rounded-lg shadow-md cursor-not-allowed opacity-50"
                        disabled
                    >
                        🚨 Launching Our Smart Locker Service on June 1st! 🎉 All orders on that day will get 25% off! 🚨
                    </a>
                </div>
            </section>
        HTML;
    }
}
