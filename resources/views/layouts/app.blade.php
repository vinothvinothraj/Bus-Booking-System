<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col">
            <!-- Top Navigation Menu -->
            <header>
                @livewire('navigation-menu')
            </header>
        
            <!-- Main Content Area: Sidebar and Main Section -->
            <div class="flex flex-1">
                <!-- Sidebar -->
                <aside class="bg-white dark:bg-gray-800 shadow-lg w-64 md:w-64 lg:w-64">
                    <x-sidebar />
                </aside>
        
                <!-- Page Content -->
                <div class="flex-1 p-6">
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white dark:bg-gray-800 shadow mb-6 rounded-md">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
        
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
        

        @stack('modals')

        @livewireScripts
    </body>
</html>
