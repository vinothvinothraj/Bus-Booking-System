<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <!-- Full-width Form Section with Title and Description inside -->
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <form wire:submit.prevent="submitForm">
            <!-- Title and Description -->
            <div class="mb-6 flex gap-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ $title }}
                </h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ $description }}
                </p>
            </div>

            <!-- Form Fields -->
            <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                <!-- Name Input -->
                <div class="col-span-1">
                    <x-label for="first_name" value="{{ __('First Name') }}" />
                    <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model.defer="first_name" autocomplete="first_name" />
                    <x-input-error for="first_name" class="mt-2" />
                </div>

                <!-- Last Name Input -->
                <div class="col-span-1">
                    <x-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="last_name" autocomplete="last_name" />
                    <x-input-error for="last_name" class="mt-2" />
                </div>

                <!-- Email Input -->
                <div class="col-span-1">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="email" autocomplete="email" />
                    <x-input-error for="email" class="mt-2" />
                </div>

                

                <!-- Additional fields for UserInformation -->
                <div class="col-span-1">
                    <x-label for="nic_id" value="{{ __('NIC ID') }}" />
                    <x-input id="nic_id" type="text" class="mt-1 block w-full" wire:model.defer="nic_id" autocomplete="nic_id" />
                    <x-input-error for="nic_id" class="mt-2" />
                </div>

                <!-- Password Input (spans two columns on larger screens) -->
                <div class="col-span-2">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="password" autocomplete="new-password" />
                    <x-input-error for="password" class="mt-2" />
                </div>

                <!-- Confirm Password Input (spans two columns on larger screens) -->
                <div class="col-span-2">
                    <x-label for="confirm_password" value="{{ __('Confirm Password') }}" />
                    <x-input id="confirm_password" type="password" class="mt-1 block w-full" wire:model.defer="confirm_password" autocomplete="confirm-password" />
                    <x-input-error for="confirm_password" class="mt-2" />
                </div>

                {{-- <div class="col-span-1">
                    <x-label for="gender" value="{{ __('Gender') }}" />
                    <x-select id="gender" class="mt-1 block w-full" wire:model.defer="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </x-select>
                    <x-input-error for="gender" class="mt-2" />
                </div> --}}
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end mt-6">
                <x-button class="ml-4">
                    {{ __('Create') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
