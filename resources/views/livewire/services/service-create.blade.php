<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Service') }}
        </h2>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 rounded-md">
        <form wire:submit.prevent="submitForm">
            <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                <div class="col-span-1">
                    <x-label for="name" value="{{ __('Service Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="col-span-1">
                    <x-label for="price_per_seat" value="{{ __('Price Per Seat') }}" />
                    <x-input id="price_per_seat" type="number" class="mt-1 block w-full" wire:model.defer="price_per_seat" autocomplete="price_per_seat" />
                    <x-input-error for="price_per_seat" class="mt-2" />
                </div>

                <div class="col-span-2">
                    <x-label for="description" value="{{ __('Description') }}" />
                    <x-textarea id="description" class="mt-1 block w-full" wire:model.defer="description" autocomplete="description" />
                    <x-input-error for="description" class="mt-2" />   
                </div>

            </div>

            <div class="flex justify-between mt-6">
                <x-button wire:click="goBack">
                    {{ __('Back') }}
                </x-button>

                <div class="flex gap-4">
                    <x-button wire:click="resetForm" type="button">
                        {{ __('Reset') }}
                    </x-button>

                    <x-button type="submit">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
