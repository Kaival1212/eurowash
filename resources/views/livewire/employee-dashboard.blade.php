<div class="container mx-auto px-4 py-8">
    <div
        class="max-w-6xl mx-auto bg-white shadow-md rounded-lg overflow-hidden"
    >
        <div class="bg-blue-600 text-white py-4 px-6">
            <div
                class="flex flex-col md:flex-row md:justify-between md:items-center"
            >
                <div>
                    <h1 class="text-2xl font-bold">Employee Dashboard</h1>
                    <p class="text-sm mt-1">
                        {{ $store->name }} - {{ $store->city }}
                    </p>
                </div>
            </div>
        </div>

        <div class="p-4 md:p-6 space-y-4 md:space-y-6">
            <div wire:loading class="text-center py-4">
                <div
                    class="inline-block animate-spin rounded-full h-6 w-6 border-t-2 border-b-2 border-blue-600"
                ></div>
                <span class="ml-2">Loading...</span>
            </div>

            @forelse($filteredOrders->whereNotIn('status', ['completed',
            'cancelled']) as $order)
            <div
                class="border rounded-md p-4 bg-gray-50 shadow-sm hover:shadow-md transition-shadow"
            >
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="space-y-2 mb-4 md:mb-0">
                        <h2 class="text-lg font-semibold text-blue-800">
                            Locker #{{ $order->locker->locker_number }}
                        </h2>
                        <p class="text-sm text-gray-600">
                            <span class="font-medium">Customer:</span>
                            {{ $order->name }} |
                            <span class="font-medium">Phone:</span>
                            {{ $order->phone }}
                        </p>
                    </div>

                    <div class="flex flex-col items-end space-y-2">
                        @if($order->status === 'pending')
                        <button
                            wire:click="confirmLockerOrder({{ $order->id }})"
                            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium"
                        >
                            Accept Order
                        </button>

                        <button
                            wire:click="cancelLockerOrder({{ $order->id }})"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium"
                        >
                            Cancel Order
                        </button>

                        @elseif($order->status === 'confirmed')
                        <input
                            type="number"
                            wire:model.defer="orderPrice.{{ $order->id }}"
                            placeholder="Price (£)"
                            step="0.01"
                            class="border rounded px-2 py-1 text-sm w-24"
                        />
                        <input
                            type="text"
                            wire:model.defer="orderAfterCodes.{{ $order->id }}"
                            placeholder="Locker Code"
                            class="border rounded px-2 py-1 text-sm w-24"
                        />
                        <button
                            wire:click="completeLockerOrder({{ $order->id }})"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium"
                        >
                            Mark as Complete
                        </button>
                        @error('price-'.$order->id)
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-8">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-12 w-12 mx-auto text-gray-400"
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
                <p class="text-gray-600 mt-2">No pending or active orders.</p>
                <p class="text-gray-500 text-sm">
                    All orders are either completed or cancelled.
                </p>
            </div>
            @endforelse
        </div>
    </div>
</div>
