<div class="container mx-auto px-4 py-10">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-blue-800">My Bookings</h1>
        <p class="text-gray-600 mt-2">
            View and manage all your locker bookings
        </p>
        <div class="h-1 w-24 bg-blue-600 mt-4"></div>
    </div>

    <!-- Tabs Section -->
    <div class="mb-8">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px space-x-8">
                <a
                    href="#active"
                    class="border-b-2 border-blue-500 text-blue-600 py-4 px-1 font-medium text-sm sm:text-base whitespace-nowrap"
                >
                    Active Bookings
                </a>
                <a
                    href="#completed"
                    class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 py-4 px-1 font-medium text-sm sm:text-base whitespace-nowrap"
                >
                    Completed Orders
                </a>
                <a
                    href="#cancelled"
                    class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 py-4 px-1 font-medium text-sm sm:text-base whitespace-nowrap"
                >
                    Cancelled
                </a>
            </nav>
        </div>
    </div>

    <!-- Active Bookings Section -->
    <section id="active" class="mb-12">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Active Bookings</h2>
            <div class="text-sm text-gray-500">
                <span
                    class="font-medium"
                    >{{ $bookings->whereIn('status', ['pending', 'confirmed', 'completed'])->where('payment', '!=', 'paid')->count() }}</span
                >
                active bookings
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($bookings->whereIn('status', ['pending', 'confirmed',
            'completed'])->where('payment', '!=', 'paid') as $booking)
            <div
                class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition"
                wire:click="showBookingDetails({{ $booking->id }})"
                wire:loading.class="cursor-not-allowed"
            >
                <div class="bg-blue-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-blue-800 font-semibold">
                            #{{ $booking->id }}
                        </h2>
                        @switch($booking->status) @case('confirmed')
                        <span
                            class="px-2 py-1 text-green-700 bg-green-100 rounded-full text-xs font-semibold"
                            >Confirmed</span
                        >
                        @break @case('pending')
                        <span
                            class="px-2 py-1 text-yellow-700 bg-yellow-100 rounded-full text-xs font-semibold"
                            >Pending</span
                        >
                        @break @case('cancelled')
                        <span
                            class="px-2 py-1 text-red-700 bg-red-100 rounded-full text-xs font-semibold"
                            >Cancelled</span
                        >
                        @break @case('completed')
                        <span
                            class="px-2 py-1 text-blue-700 bg-blue-100 rounded-full text-xs font-semibold"
                            >Completed</span
                        >
                        @break @default
                        <span
                            class="px-2 py-1 text-gray-700 bg-gray-100 rounded-full text-xs font-semibold"
                            >{{ ucfirst($booking->status) }}</span
                        >
                        @endswitch
                    </div>
                </div>

                <div class="px-6 py-4 space-y-4">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Date & Time</p>
                        <p class="font-medium">
                            {{ $booking->created_at->format('d M Y, H:i') }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Before Code</p>
                        @if(in_array($booking->status, ['confirmed',
                        'completed', 'paid']))
                        <p class="font-mono font-medium">
                            {{ $booking->before_code }}
                        </p>
                        @else
                        <p class="italic text-gray-400">
                            Hidden until order is confirmed
                        </p>
                        @endif
                    </div>

                    @if($booking->status === 'completed' && $booking->payment
                    === 'pending')
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Payment</p>
                        @if($booking->payment === 'pending')
                        <a
                            href="{{ $booking->payment_link }}"
                            target="_blank"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-2"
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
                            Pay Now
                        </a>
                        @elseif($booking->payment === 'paid')
                        <p class="text-green-600 font-semibold">
                            Payment Completed
                        </p>
                        @else
                        <p class="text-red-500">Payment Failed</p>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div
                class="col-span-full bg-white rounded-lg shadow border border-gray-200 p-8 text-center"
            >
                <div class="py-6">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-16 w-16 mx-auto text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                        />
                    </svg>
                    <p class="mt-4 text-gray-500 text-lg">
                        No active bookings found
                    </p>
                    <p class="text-gray-400 mt-2">
                        Your active bookings will appear here
                    </p>
                </div>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Completed Orders Section -->
    <section id="completed" class="mb-12">
        @php $completedOrders = $bookings->filter(function ($booking) { return
        $booking->status === 'completed' && $booking->payment === 'paid'; });
        @endphp

        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-green-800">Completed Orders</h2>
            <div class="text-sm text-gray-500">
                <span class="font-medium">{{ $completedOrders->count() }}</span>
                completed orders
            </div>
        </div>

        @if($completedOrders->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($completedOrders as $booking)
            <div
                class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition"
                wire:click="showBookingDetails({{ $booking->id }})"
                wire:loading.class="cursor-not-allowed"
            >
                <div class="bg-green-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-green-800">
                            Order #{{ $booking->id }}
                        </h3>
                        <span
                            class="px-2 py-1 text-green-700 bg-green-100 rounded-full text-xs font-semibold"
                            >Completed</span
                        >
                    </div>
                </div>

                <div class="px-6 py-4 space-y-3">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Completed on</p>
                        <p class="font-medium">
                            {{ $booking->updated_at->format('d M Y, H:i') }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Pickup Code</p>
                        <p class="font-mono font-semibold text-blue-700">
                            {{ $booking->after_code }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Amount Paid</p>
                        <p class="font-medium text-green-700">
                            £{{ number_format($booking->price, 2) }}
                        </p>
                    </div>

                    @if($booking->invoice_link)
                    <div class="pt-2">
                        <a
                            href="{{ $booking->invoice_link }}"
                            target="_blank"
                            class="text-blue-600 hover:text-blue-800 text-sm flex items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 mr-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                                />
                            </svg>
                            View Receipt
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div
            class="bg-white rounded-lg shadow border border-gray-200 p-8 text-center"
        >
            <div class="py-6">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-16 mx-auto text-gray-400"
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
                <p class="mt-4 text-gray-500 text-lg">
                    No completed orders yet
                </p>
                <p class="text-gray-400 mt-2">
                    Completed orders will appear here
                </p>
            </div>
        </div>
        @endif
    </section>

    <!-- Cancelled Bookings Section -->
    <section id="cancelled" class="mb-12">
        @php $cancelledOrders = $bookings->filter(function ($booking) { return
        $booking->status === 'cancelled'; }); @endphp

        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-red-800">Cancelled Bookings</h2>
            <div class="text-sm text-gray-500">
                <span class="font-medium">{{ $cancelledOrders->count() }}</span>
                cancelled bookings
            </div>
        </div>

        @if($cancelledOrders->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($cancelledOrders as $booking)
            <div
                class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden"
                wire:click="showBookingDetails({{ $booking->id }})"
                wire:loading.class="cursor-not-allowed"
            >
                <div class="bg-red-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-red-800">
                            Order #{{ $booking->id }}
                        </h3>
                        <span
                            class="px-2 py-1 text-red-700 bg-red-100 rounded-full text-xs font-semibold"
                            >Cancelled</span
                        >
                    </div>
                </div>

                <div class="px-6 py-4 space-y-3">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Created on</p>
                        <p class="font-medium">
                            {{ $booking->created_at->format('d M Y, H:i') }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">Cancelled on</p>
                        <p class="font-medium">
                            {{ $booking->updated_at->format('d M Y, H:i') }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div
            class="bg-white rounded-lg shadow border border-gray-200 p-8 text-center"
        >
            <div class="py-6">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-16 mx-auto text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
                <p class="mt-4 text-gray-500 text-lg">No cancelled bookings</p>
                <p class="text-gray-400 mt-2">Good job!</p>
            </div>
        </div>
        @endif
    </section>
</div>
