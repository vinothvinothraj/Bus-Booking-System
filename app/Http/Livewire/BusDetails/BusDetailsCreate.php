<?php

namespace App\Http\Livewire\BusDetails;

use App\Models\Bus;
use Livewire\Component;
use App\Models\UserInformation;

class BusDetailsCreate extends Component
{
    public $busNumber;

    public $capacity;

    public $drivers;

    public $driverId;

    
    public $conductors;

    public $conductorId;

    public $busType;

    protected $rules = [
        'busNumber' => 'required',
        'capacity' => 'required',
        'driverId' => 'required',
        'conductorId' => 'required',
        'busType' => 'required',
    ];

    public function mount()
    {
        $this->drivers = UserInformation::where('user_type', 'driver')->get();
        $this->conductors = UserInformation::where('user_type', 'conductor')->get();
        
    }

    public function submitForm()
    {
        $this->validate();

        $newbus = Bus::create([
            'bus_number' => $this->busNumber,
            'capacity' => $this->capacity,
            'driver_id' => $this->driverId,
            'conductor_id' => $this->conductorId,
            'bus_type' => $this->busType,
        ]);
        
        $this->resetForm();
        return redirect('/bus-details');
        
    }

    public function goBack()
    {
        return redirect('/bus-details');
    }

    public function resetForm()
    {
        $this->busNumber = null;
        $this->capacity = null;
        $this->driverId = null;
        $this->conductorId = null;
        $this->busType = null;
        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.bus-details.bus-details-create')->layout('layouts.app');
    }
}
