<?php

use App\Http\Livewire\User\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserCreate;
use App\Http\Livewire\Services\ServiceIndex;
use App\Http\Livewire\Services\ServiceCreate;
use App\Http\Livewire\RoutesDetails\RoutesIndex;
use App\Http\Livewire\BusDetails\BusDetailsIndex;
use App\Http\Livewire\RoutesDetails\RoutesCreate;
use App\Http\Livewire\BusDetails\BusDetailsCreate;
use App\Http\Livewire\TimeSlotsDetails\TimeSlotIndex;
use App\Http\Livewire\TimeSlotsDetails\TimeSlotCreate;

Route::get('/', function () {
    return view('welcome');
});

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