<div class="container mx-auto px-4 py-8">
    <div
        class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden"
    >
        @session('success')
        <div
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert"
        >
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session("success") }}</span>
        </div>
        @endif @if(session('error'))
        <div
            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
            role="alert"
        >
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session("error") }}</span>
        </div>
        @endif

        <!-- Default Wash/Dry Note -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-yellow-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M12 20h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </div>
                <div class="ml-3 text-sm text-yellow-700">
                    <p>
                        <strong>Note:</strong> Unless specified, we wash your
                        clothes using <strong>warm mode</strong> ,dry them using
                        <strong>medium heat</strong> , use
                        <strong>softener</strong> and
                        <strong>detergent</strong> for all items.
                    </p>
                    <p class="mt-1">
                        Final cost may vary depending on the time it takes to
                        dry your laundry.
                        <br />
                        <em
                            >Example: If drying takes longer due to heavier
                            items, the cost may increase slightly.</em
                        >
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-blue-600 text-white py-4 px-6">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold flex items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                        />
                    </svg>
                    Locker Booking
                </h1>
                <div class="text-sm bg-blue-700 px-3 py-1 rounded-full">
                    Locker #{{ $this->locker->locker_number }}
                </div>
            </div>
        </div>

        <!-- Store Info -->
        <div class="bg-gray-50 border-b px-6 py-4">
            <div class="flex items-center">
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-800">
                        {{ $this->store->name }}
                    </h2>
                    <p class="text-sm text-gray-600">
                        {{ $this->store->address }}, {{ $this->store->city }},
                        {{ $this->store->pin }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Booking Form -->
        <form wire:submit.prevent="saveBooking" class="p-6">
            <div class="space-y-6">
                <!-- User Details -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        Your Details
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label
                                for="name"
                                class="block text-sm font-medium text-gray-700"
                                >Full Name</label
                            >
                            <input
                                type="text"
                                wire:model.defer="name"
                                id="name"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                required
                            />
                            @error('name')
                            <span class="text-red-600 text-sm">{{
                                $message
                            }}</span>
                            @enderror
                        </div>

                        <div>
                            <label
                                for="phone"
                                class="block text-sm font-medium text-gray-700"
                                >Phone Number</label
                            >
                            <input
                                type="tel"
                                wire:model.defer="phone"
                                id="phone"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                required
                            />
                            @error('phone')
                            <span class="text-red-600 text-sm">{{
                                $message
                            }}</span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700"
                            >Email Address</label
                        >
                        <input
                            type="email"
                            wire:model.defer="email"
                            id="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            required
                        />
                        @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Booking Details -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        Booking Details
                    </h3>

                    <div>
                        <label
                            for="notes"
                            class="block text-sm font-medium text-gray-700"
                            >Special Instructions (optional)</label
                        >
                        <textarea
                            wire:model.defer="notes"
                            id="notes"
                            rows="3"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        ></textarea>
                    </div>
                </div>

                <!-- Access Code -->
                <div class="bg-blue-50 p-4 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-blue-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-blue-800">
                                Locker Access Code
                            </h3>
                            <div class="mt-2 text-sm text-blue-700">
                                <p>
                                    Your access code will be provided after
                                    booking confirmation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
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
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        Confirm Booking
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
