<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Routes') }}
        </h2>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 rounded-md mt-8">
        <form wire:submit.prevent="submitForm">
            <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                <div class="col-span-1">
                    <x-label for="departure" value="{{ __('Departure') }}" />
                    <x-input id="departure" type="text" class="mt-1 block w-full" wire:model.defer="departure" autocomplete="departure" />
                    <x-input-error for="departure" class="mt-2" />
                </div>

                <div class="col-span-1">
                    <x-label for="destination" value="{{ __('Destination') }}" />
                    <x-input id="destination" type="text" class="mt-1 block w-full" wire:model.defer="destination" autocomplete="destination" />
                    <x-input-error for="destination" class="mt-2" />
                </div>

                <div class="col-span-1">
                    <x-label for="serviceId" value="{{ __('Service Name') }}" />
                    <x-select id="serviceId" class="mt-1 block w-full" wire:model.live="serviceId">
                        <option value="">Select Service Name</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option> 
                        @endforeach
                    </x-select>
                    <x-input-error for="serviceId" class="mt-2" />
                </div>

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
