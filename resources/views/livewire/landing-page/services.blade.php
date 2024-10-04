<div ng-app="servicesApp" class="pl-6 pr-6">
    <!-- Main Container for Services Display -->
    <div ng-controller="servicesController" class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Available Services</h1>
        
        <!-- Display Cards in a Responsive Grid -->
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 mt-4">
            <!-- Article for each service -->
            <div ng-repeat="service in services" class="h-auto rounded-lg bg-gray-200 shadow-lg">
                <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                    <!-- Image Handling: Show service image if available, otherwise show placeholder -->
                    <img
                        ng-src="@{{ service.image_url || 'https://via.placeholder.com/400x300.png?text=No+Image+Available' }}"
                        alt="@{{ service.name }}"
                        class="h-64 w-full object-cover"
                    />

                    <div class="p-4 sm:p-6">
                        <div class="flex justify-between">
                            <!-- Service Title -->
                            <h3 class="text-lg font-medium text-gray-900">
                                @{{ service.name }}
                            </h3>

                            <!-- Service Price -->
                            <h3 class="text-sm font-medium text-gray-900">
                                @{{ service.price_per_seat }} LKR
                            </h3>
                        </div>

                        <!-- Service Description -->
                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            @{{ service.description }}
                        </p>

                        <!-- Optional More Info Link -->
                        <a href="@{{ service.more_info_url || '#' }}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                            Find out more
                            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                &rarr;
                            </span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- AngularJS Script to Fetch Services Data -->
    <script>
        var app = angular.module('servicesApp', []);

        app.controller('servicesController', function($scope, $http) {
            // Fetch services data using the API endpoint
            $http.get('/api/services')
                .then(function(response) {
                    // Assign the nested data array to $scope.services
                    $scope.services = response.data.data;
                    console.log($scope.services); // Log the services data to verify
                }, function(error) {
                    console.error('Error fetching services:', error);
                });
        });
    </script>
</div>


