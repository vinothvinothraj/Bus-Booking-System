<?php

namespace App\Http\Livewire\TimeSlotsDetails;

use App\Models\Bus;
use App\Models\TimeSlot;
use Livewire\Component;
use Carbon\Carbon;
use Laravel\Jetstream\InteractsWithBanner;

class TimeSlotCreate extends Component
{
    use InteractsWithBanner;
    public $startTime;
    public $endTime;
    public $date;
    public $buses;
    public $busId;
    public $availableSeats;

    protected $rules = [
        'startTime' => 'required|date_format:H:i',
        'endTime' => 'required|date_format:H:i',
        'date' => 'required|date_format:Y-m-d',
        'busId' => 'required|exists:buses,id',
        'availableSeats' => 'required|integer|min:1',
    ];

    public function mount()
    {
        $this->buses = Bus::all();
    }

    public function submitForm()
    {
        $this->validate();
        
        TimeSlot::create([
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
            'date' => $this->date,
            'bus_id' => $this->busId,
            'available_seats' => $this->availableSeats,
        ]);
        $this->banner('Time Slot Created Successfully');
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
