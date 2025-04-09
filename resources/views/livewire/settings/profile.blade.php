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
                        d="M5.121 17.804A9 9 0 0112 3a9 9 0 016.879 14.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg>
                Profile Settings
            </h1>
        </div>

        <form
            wire:submit.prevent="updateProfileInformation"
            class="p-6 space-y-6"
        >
            <!-- Name -->
            <div>
                <label
                    for="name"
                    class="block text-sm font-medium text-gray-700"
                >
                    Full Name
                </label>
                <input
                    type="text"
                    wire:model.defer="name"
                    id="name"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    required
                />
                @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
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

            <!-- Save Button -->
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
                            d="M5 13l4 4L19 7"
                        />
                    </svg>
                    Save Changes
                </button>
            </div>

            <!-- Success Message -->
            <div
                x-data="{ shown: false }"
                x-init="@this.on('profile-updated', () => { shown = true; setTimeout(() => shown = false, 3000); })"
                x-show="shown"
                x-transition
                class="text-green-600 text-sm text-center"
            >
                Profile updated successfully!
            </div>
        </form>
    </div>
</div>
