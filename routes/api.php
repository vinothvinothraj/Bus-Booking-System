<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ServicesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route to get all services
Route::get('/services', [ServicesController::class, 'index']);

// Route to get a specific service by ID
Route::get('/services/{id}', [ServicesController::class, 'show']);