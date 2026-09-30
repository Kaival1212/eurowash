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
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                    />
                </svg>
                Account Login
            </h1>
        </div>

        <!-- Login Form -->
        <form wire:submit.prevent="login" class="p-6">
            <div class="space-y-6">
                <!-- Login Details -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-900">Sign In</h3>
                    <p class="text-sm text-gray-600">
                        Access your account information
                    </p>

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

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                wire:model.defer="remember"
                                id="remember"
                                type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            />
                            <label
                                for="remember"
                                class="ml-2 block text-sm text-gray-900"
                                >Remember me</label
                            >
                        </div>

                        <div class="text-sm">
                            <a
                                href="{{ route('password.request') }}"
                                class="font-medium text-blue-600 hover:text-blue-500"
                                >Forgot your password?</a
                            >
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
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                            />
                        </svg>
                        Sign In
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center text-sm text-gray-600">
                    <p>
                        Don't have an account?
                        <a
                            href="{{ route('register') }}"
                            class="font-medium text-blue-600 hover:text-blue-500"
                            >Create one</a
                        >
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
