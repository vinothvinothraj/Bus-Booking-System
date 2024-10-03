<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Time Slot Details') }}
        </h2>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 rounded-md mt-8">
        <form wire:submit.prevent="submitForm">
            <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                
                <x-wireui-datetime-picker wire:model.defer="incident_date" without-timezone
                                        parse-format="YYYY-MM-DD" without-time placeholder="Date of the incident" />

                <div class="col-span-1">
                    <x-label for="busId" value="{{ __('Bus Number') }}" />
                    <x-select id="busId" class="mt-1 block w-full" wire:model.live="busId">
                        <option value="">Select Bus Number</option>
                        @foreach($buses as $bus)
                            <option value="{{ $bus->id }}">{{ $bus->bus_number }}</option> 
                        @endforeach
                    </x-select>
                    <x-input-error for="busId" class="mt-2" />
                </div>

                <div class="col-span-1">
                    <x-label for="availableSeats" value="{{ __('Available Seats') }}" />
                    <x-input id="availableSeats" type="text" class="mt-1 block w-full" wire:model.defer="availableSeats" autocomplete="availableSeats" />
                    <x-input-error for="availableSeats" class="mt-2" />
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
