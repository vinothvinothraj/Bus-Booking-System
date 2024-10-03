<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-end mb-4">
                    <!-- Button for creating a new user -->
                    <a href="{{ route('services.create') }}">
                        <x-button>
                            {{ __('Create Service') }}
                        </x-button>
                    </a>
                </div>

                <!-- Existing user data display here -->
                <div>
                    <!-- Your existing code to display users -->
                </div>
            </div>
        </div>
    </div>

</div>
