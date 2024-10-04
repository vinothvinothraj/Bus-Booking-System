<?php

use App\Http\Livewire\User\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserCreate;
use App\Http\Livewire\LandingPage\Home;
use App\Http\Livewire\LandingPage\About;
use App\Http\Livewire\LandingPage\Contact;
use App\Http\Livewire\LandingPage\Services;
use App\Http\Livewire\LandingPage\TimeSlot;
use App\Http\Livewire\Services\ServiceIndex;
use App\Http\Livewire\LandingPage\PointsCart;
use App\Http\Livewire\Services\ServiceCreate;
use App\Http\Livewire\PointsSytem\PointsIndex;
use App\Http\Livewire\RoutesDetails\RoutesIndex;
use App\Http\Livewire\BusDetails\BusDetailsIndex;
use App\Http\Livewire\RoutesDetails\RoutesCreate;
use App\Http\Livewire\BookingDetails\BookingIndex;
use App\Http\Livewire\BusDetails\BusDetailsCreate;
use App\Http\Livewire\LandingPage\BookingNow;
use App\Http\Livewire\PaymentDetails\PaymentIndex;
use App\Http\Livewire\TimeSlotsDetails\TimeSlotIndex;
use App\Http\Livewire\TimeSlotsDetails\TimeSlotCreate;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/points-cart', PointsCart::class)->name('points-cart');
Route::get('/time-slots', TimeSlot::class)->name('time-slots');
Route::get('/service', Services::class)->name('service');
Route::get('/about-us', About::class)->name('about-us');
Route::get('/contact-us', Contact::class)->name('contact-us');
Route::get('/booking-now', BookingNow::class)->name('booking-now');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/users', Index::class)->name('users');
Route::get('/users/create', UserCreate::class)->name('users.create');

Route::get('/services', ServiceIndex::class)->name('services');
Route::get('/services/create', ServiceCreate::class)->name('services.create');

Route::get('/bus-details', BusDetailsIndex::class)->name('bus-details');
Route::get('/bus-details/create', BusDetailsCreate::class)->name('bus-details.create');

Route::get('/route-details', RoutesIndex::class)->name('route-details');
Route::get('/route-details/create', RoutesCreate::class)->name('route-details.create');

Route::get('/time-slots-details', TimeSlotIndex::class)->name('time-slots-details');
Route::get('/time-slots-details/create', TimeSlotCreate::class)->name('time-slots-details.create');

Route::get('/booking-details', BookingIndex::class)->name('booking-details');
Route::get('/payment-details', PaymentIndex::class)->name('payment-details');
Route::get('/point-system-details', PointsIndex::class)->name('point-system-details');