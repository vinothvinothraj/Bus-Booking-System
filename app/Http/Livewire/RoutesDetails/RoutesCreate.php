<?php

namespace App\Http\Livewire\RoutesDetails;

use App\Models\Bus;
use App\Models\Route;
use App\Models\Service;
use Livewire\Component;
use Laravel\Jetstream\InteractsWithBanner;
class RoutesCreate extends Component
{
    use InteractsWithBanner;
    public $departure;
    public $destination;

    public $buses;

    public $busId;

    public $services;

    public $serviceId;

    protected $rules = [
        'departure' => 'required',
        'destination' => 'required',
        'busId' => 'required',
        'serviceId' => 'required',
    ];

    public function mount(){
        $this->buses = Bus::all();
        $this->services = Service::all();
    }

    public function submitForm()
    {
        $this->validate();

        $newRoute = Route::create([
            'departure' => $this->departure,
            'destination' => $this->destination,
            'bus_id' => $this->busId,
            'service_id' => $this->serviceId,
        ]);
        $this->banner('Route created successfully');
        $this->resetForm();
        return redirect('/route-details');
        
    }

    public function goBack()
    {
        return redirect('/route-details');
    }

    public function resetForm()
    {
        $this->departure = null;
        $this->destination = null;
        $this->busId = null;
        $this->serviceId = null;
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.routes-details.routes-create')->layout('layouts.app');
    }
}
