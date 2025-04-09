<div class="container mx-auto px-4 py-8">
    <div
        class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden"
    >
        <div class="bg-blue-600 text-white py-4 px-6">
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
                        d="M12 11c0-1.104.896-2 2-2s2 .896 2 2v1m0 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                    />
                </svg>
                Reset Your Password
            </h1>
        </div>

        <form wire:submit.prevent="resetPassword" class="p-6 space-y-6">
            <!-- Email Address -->
            <div>
                <label
                    for="email"
                    class="block text-sm font-medium text-gray-700"
                >
                    Email Address
                </label>
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

            <!-- New Password -->
            <div>
                <label
                    for="password"
                    class="block text-sm font-medium text-gray-700"
                >
                    New Password
                </label>
                <input
                    type="password"
                    wire:model.defer="password"
                    id="password"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    required
                />
                @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label
                    for="password_confirmation"
                    class="block text-sm font-medium text-gray-700"
                >
                    Confirm New Password
                </label>
                <input
                    type="password"
                    wire:model.defer="password_confirmation"
                    id="password_confirmation"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    required
                />
                @error('password_confirmation')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
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
                            d="M16 17l-4 4m0 0l-4-4m4 4V3"
                        />
                    </svg>
                    Reset Password
                </button>
            </div>

            <!-- Back to Login -->
            <div class="text-center text-sm text-gray-600">
                <a
                    href="{{ route('login') }}"
                    class="font-medium text-blue-600 hover:text-blue-500"
                >
                    Return to login
                </a>
            </div>
        </form>
    </div>
</div>
