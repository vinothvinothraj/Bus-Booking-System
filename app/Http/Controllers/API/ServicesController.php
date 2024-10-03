<?php

namespace App\Http\Controllers\API;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    // Get all services
    public function index()
    {
        
        $services = Service::all();

        return response()->json([
            'status' => 'success',
            'data' => $services
        ], 200);
    }

    // Get a specific service by ID
    public function show($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json([
                'status' => 'error',
                'message' => 'Service not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $service
        ], 200);
    }
}
