<!DOCTYPE html>
<html lang="en" ng-app="servicesApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Bus Tickets Booking System' }}</title>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <!-- Tailwind CSS (Vite) -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>

    @livewire('top-navigation-bar')

    <main>
        {{ $slot }}  
    </main>

    @livewire('bottom-footer')

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
