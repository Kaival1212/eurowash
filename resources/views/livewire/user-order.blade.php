<div
    class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden max-w-3xl mx-auto"
>
    <!-- Order Header -->
    <div class="bg-blue-50 px-6 py-5 border-b border-gray-200">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-xl font-bold text-blue-800">
                    Order #{{ $order->id }}
                </h1>
                <p class="text-sm text-gray-600 mt-1">
                    Placed on {{ $order->created_at->format('d M Y, H:i') }}
                </p>
            </div>

            @switch($order->status) @case('confirmed')
            <span
                class="px-3 py-1 text-green-700 bg-green-100 rounded-full text-sm font-semibold"
                >Confirmed</span
            >
            @break @case('pending')
            <span
                class="px-3 py-1 text-yellow-700 bg-yellow-100 rounded-full text-sm font-semibold"
                >Pending</span
            >
            @break @case('cancelled')
            <span
                class="px-3 py-1 text-red-700 bg-red-100 rounded-full text-sm font-semibold"
                >Cancelled</span
            >
            @break @case('completed')
            <span
                class="px-3 py-1 text-blue-700 bg-blue-100 rounded-full text-sm font-semibold"
                >Completed</span
            >
            @break @default
            <span
                class="px-3 py-1 text-gray-700 bg-gray-100 rounded-full text-sm font-semibold"
                >{{ ucfirst($order->status) }}</span
            >
            @endswitch
        </div>
    </div>

    <!-- Order Details -->
    <div class="px-6 py-6">
        <!-- Customer Info -->
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-3">
                Customer Information
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                    <p class="text-sm text-gray-500 mb-1">Name</p>
                    <p class="font-medium">
                        {{ $order->name ?: 'Not provided' }}
                    </p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                    <p class="text-sm text-gray-500 mb-1">Email</p>
                    <p class="font-medium">
                        {{ $order->email ?: 'Not provided' }}
                    </p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                    <p class="text-sm text-gray-500 mb-1">Phone</p>
                    <p class="font-medium">
                        {{ $order->phone ?: 'Not provided' }}
                    </p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                    <p class="text-sm text-gray-500 mb-1">Order Date</p>
                    <p class="font-medium">
                        {{ $order->created_at->format('d M Y, H:i') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Access Codes -->
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-3">
                Access Codes
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-blue-700 mb-1">
                                Drop-off Code
                            </p>
                            @if(in_array($order->status, ['confirmed',
                            'completed', 'paid']))
                            <p class="font-mono font-semibold text-lg">
                                {{ $order->before_code }}
                            </p>
                            @else
                            <p class="italic text-gray-500">
                                Available after confirmation
                            </p>
                            @endif
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-blue-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"
                            />
                        </svg>
                    </div>
                </div>
                <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-green-700 mb-1">
                                Pickup Code
                            </p>
                            @if($order->status === 'completed' &&
                            $order->payment === 'paid')
                            <p class="font-mono font-semibold text-lg">
                                {{ $order->after_code }}
                            </p>
                            @else
                            <p class="italic text-gray-500">
                                Available after payment
                            </p>
                            @endif
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-green-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Information -->
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-3">
                Payment Information
            </h2>
            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Amount:</span>
                        <span class="font-semibold"
                            >£{{ number_format($order->price, 2) }}</span
                        >
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Status:</span>
                        @switch($order->payment) @case('paid')
                        <span class="text-green-600 font-semibold">Paid</span>
                        @break @case('pending')
                        <span class="text-yellow-600 font-semibold"
                            >Pending</span
                        >
                        @break @case('failed')
                        <span class="text-red-600 font-semibold">Failed</span>
                        @break @default
                        <span class="text-gray-600">Unknown</span>
                        @endswitch
                    </div>

                    @if($order->payment === 'pending' && $order->payment_link)
                    <div class="pt-2">
                        <a
                            href="{{ $order->payment_link }}"
                            target="_blank"
                            class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
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
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                                />
                            </svg>
                            Pay Now
                        </a>
                    </div>
                    @endif @if($order->invoice_link && $order->payment ===
                    'paid')
                    <div class="pt-2">
                        <a
                            href="{{ $order->invoice_link }}"
                            target="_blank"
                            class="inline-flex items-center text-blue-600 hover:text-blue-800"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-1"
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
        </div>

        <!-- Notes Section (if available) -->
        @if($order->Notes)
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-3">Notes</h2>
            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                <p class="text-gray-700">{{ $order->Notes }}</p>
            </div>
        </div>
        @endif

        <!-- Order Timeline -->
        <div>
            <h2 class="text-lg font-semibold text-gray-800 mb-3">
                Order Timeline
            </h2>
            <div class="border-l-2 border-blue-200 pl-5 ml-3 space-y-6 py-2">
                <div class="relative">
                    <div
                        class="absolute -left-7 mt-1.5 w-3 h-3 bg-blue-500 rounded-full"
                    ></div>
                    <p class="text-sm text-gray-500">
                        {{ $order->created_at->format('d M Y, H:i') }}
                    </p>
                    <p class="font-medium">Order Created</p>
                </div>

                @if($order->payment === 'paid')
                <div class="relative">
                    <div
                        class="absolute -left-7 mt-1.5 w-3 h-3 bg-green-500 rounded-full"
                    ></div>
                    <p class="text-sm text-gray-500">
                        {{ $order->updated_at->format('d M Y, H:i') }}
                    </p>
                    <p class="font-medium">Payment Completed</p>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Footer with Action Buttons -->
    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
        <div class="flex justify-between">
            <a
                href="{{ route('user.bookings') }}"
                class="inline-flex items-center text-gray-600 hover:text-gray-800"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-1"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M11 17l-5-5m0 0l5-5m-5 5h12"
                    />
                </svg>
                Back to Bookings
            </a>
        </div>
    </div>
</div>
