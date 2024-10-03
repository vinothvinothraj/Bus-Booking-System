<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceIndex extends Component
{
    public $services;

    public function mount(){
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.services.service-index')->layout('layouts.app');
    }
}
