<?php

use App\Http\Livewire\Services\ServiceCreate;
use App\Http\Livewire\Services\ServiceIndex;
use App\Http\Livewire\User\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserCreate;

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