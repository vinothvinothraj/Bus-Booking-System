<?php

namespace App\Http\Livewire\RoutesDetails;

use App\Models\Route;
use Livewire\Component;

class RoutesIndex extends Component
{

    public $routeDetails;

    public function mount(){
        $this->routeDetails = Route::all();
    }
    public function render()
    {
        return view('livewire.routes-details.routes-index')->layout('layouts.app');
    }
}
