<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Bus Details') }}
        </h2>
    </x-slot>

    <div class="bg-white dark:bg-gray-800 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 rounded-md mt-8">
        <form wire:submit.prevent="submitForm">
            <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                <div class="col-span-1">
                    <x-label for="busNumber" value="{{ __('Bus Number') }}" />
                    <x-input id="busNumber" type="text" class="mt-1 block w-full" wire:model.defer="busNumber" autocomplete="busNumber" />
                    <x-input-error for="busNumber" class="mt-2" />
                </div>

                <div class="col-span-1">
                    <x-label for="capacity" value="{{ __('Capacity') }}" />
                    <x-input id="capacity" type="number" class="mt-1 block w-full" wire:model.defer="capacity" autocomplete="capacity" />
                    <x-input-error for="capacity" class="mt-2" />
                </div>


                <div class="col-span-1">
                    <x-label for="busType" value="{{ __('Bus Type') }}" />
                    <x-select id="busType" class="mt-1 block w-full" wire:model.defer="busType">
                        <option value="">Select Bus Type</option>
                        <option value="normal">Normal</option>
                        <option value="standard">Standard</option>
                        <option value="luxury">Luxury</option>
                    </x-select>
                    <x-input-error for="busType" class="mt-2" />
                </div>

                <div class="col-span-1">
                    <x-label for="driverId" value="{{ __('Driver') }}" />
                    <x-select id="driverId" class="mt-1 block w-full" wire:model.live="driverId">
                        <option value="">Select Driver</option>
                        @foreach($drivers as $driver)
                            <option value="{{ $driver->id }}">{{ $driver->first_name }}</option> 
                        @endforeach
                    </x-select>
                    <x-input-error for="driverId" class="mt-2" />
                </div>
                
                <div class="col-span-1">
                    <x-label for="conductorId" value="{{ __('Conductor') }}" />
                    <x-select id="conductorId" class="mt-1 block w-full" wire:model="conductorId">
                        <option value="">Select Conductor</option>
                        @foreach($conductors as $conductor)
                            <option value="{{ $conductor->id }}">{{ $conductor->first_name }}</option> 
                        @endforeach
                    </x-select>
                    <x-input-error for="conductorId" class="mt-2" />
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
