@props([
    'disabled' => false,
    'wireModel' => null, 
    'withoutTimezone' => false,
    'parseFormat' => null,
    'withoutTime' => false,
    'required' => false,
    'placeholder' => 'Select date'
])

<input 
    type="date" 
    {{ $disabled ? 'disabled' : '' }} 
    {{ $wireModel ? "wire:model.defer=$wireModel" : '' }}
    {{ $required ? 'required' : '' }}
    {!! $attributes->merge([
        'class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm',
        'placeholder' => $placeholder,
        'data-without-timezone' => $withoutTimezone ? 'true' : 'false', 
        'data-parse-format' => $parseFormat, 
        'data-without-time' => $withoutTime ? 'true' : 'false' 
    ]) !!}
>
