<div class="container mx-auto px-4 py-8">
    <div
        class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden"
    >
        @if(session('success'))
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
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                    />
                </svg>
                Create Account
            </h1>
        </div>

        <!-- Registration Form -->
        <form wire:submit.prevent="register" class="p-6">
            <div class="space-y-6">
                <!-- Registration Details -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-900">Sign Up</h3>
                    <p class="text-sm text-gray-600">
                        Create an account to start booking lockers
                    </p>

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

                    <div>
                        <label
                            for="password"
                            class="block text-sm font-medium text-gray-700"
                            >Password</label
                        >
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

                    <div>
                        <label
                            for="password_confirmation"
                            class="block text-sm font-medium text-gray-700"
                            >Confirm Password</label
                        >
                        <input
                            type="password"
                            wire:model.defer="password_confirmation"
                            id="password_confirmation"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            required
                        />
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
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                            />
                        </svg>
                        Create Account
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center text-sm text-gray-600">
                    <p>
                        Already have an account?
                        <a
                            href="{{ route('login') }}"
                            class="font-medium text-blue-600 hover:text-blue-500"
                            >Sign in</a
                        >
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
