<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-extrabold text-center text-blue-800 mb-10">
        Available Lockers
    </h1>

    <div
        class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8"
    >
        @if(count($lockers) == 0)
        <div class="col-span-4 text-center text-gray-500">
            <p class="text-lg">No lockers available at the moment.</p>
        </div>
        @endif
        @foreach($lockers as $locker)
        <div
            class="bg-white border border-blue-100 shadow-sm rounded-2xl overflow-hidden hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
        >
            <div class="bg-blue-600 text-white py-4 px-6">
                <h2 class="text-lg font-semibold tracking-wide">
                    Locker #{{ $locker->locker_number }}
                </h2>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 mb-6">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-green-500"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7"
                        />
                    </svg>
                    <span class="text-green-600 font-medium"
                        >Available Now</span
                    >
                </div>

                <button
                    wire:click="bookLocker({{ $locker->id }})"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg transition duration-300 flex items-center justify-center gap-2 shadow-sm hover:shadow-md"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                    </svg>
                    Book Now
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
