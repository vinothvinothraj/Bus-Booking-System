<?php

namespace App\Http\Livewire\TimeSlotsDetails;

use App\Models\Bus;
use App\Models\TimeSlot;
use Livewire\Component;

class TimeSlotCreate extends Component
{

    public $startTime;
    public $endTime;

    public $date;

    public $buses;

    public $busId;

    public $availableSeats;

    protected $rules = [
        'startTime' => 'required',
        'endTime' => 'required',
        'busId' => 'required',
        'date' => 'required',
        'availableSeats' => 'required',
    ];

    public function mount(){
        $this->buses = Bus::all();
    }

    public function submitForm()
    {
        $this->validate();

        $newTimeSlot = TimeSlot::create([
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
            'date' =>   $this->date,
            'bus_id' => $this->busId,
            'available_seats' => $this->availableSeats
        ]);
        
        $this->resetForm();
        return redirect('/time-slots-details');
        
    }

    public function goBack()
    {
        return redirect('/time-slots-details');
    }

    public function resetForm()
    {
        $this->startTime = null;
        $this->endTime = null;
        $this->date = null;
        $this->busId = null;
        $this->availableSeats = null;
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.time-slots-details.time-slot-create')->layout('layouts.app');
    }
}
