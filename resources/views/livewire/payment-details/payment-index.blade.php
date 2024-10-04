<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Payment Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                <div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" style="white-space: nowrap;" id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400" style="white-space: nowrap;">
                            <tr>
                                <th scope="col" class="px-2 py-3">
                                    Customer Name
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Service Name
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Payment Method
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Payment Status
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Date and Time 
                                </th>
                                <th scope="col" class="px-2 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            @foreach($paymentDetails as $details)
                                <tr class="px-2 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-2 py-4">
                                        {{ $details->user->userInformation->first_name }} 
                                        {{ $details->user->userInformation->last_name }}
                                    </td>
                                    <td class="px-2 py-4">
                                        {{ $details->service->name }}
                                    </td>
                                    <td class="px-2 py-4">{{ $details->bus->bus_number }}</td>
                                    <td class="px-2 py-4">{{ $details->number_of_seats }}</td>
                                    <td class="px-2 py-4">{{ $details->status }}</td>
                                    <td class="px-2 py-4">{{ $details->created_at }}</td>
                                    <td class="px-2 py-4 flex items-center space-x-2 gap-4">
                                        <!-- Update Icon -->
                                        <a href="#" class="text-blue-500 hover:text-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                            
                                        </a>
                                        <!-- Delete Icon -->
                                        <a href="#" class="text-red-500 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                

            </div>
        </div>
    </div>

</div>
