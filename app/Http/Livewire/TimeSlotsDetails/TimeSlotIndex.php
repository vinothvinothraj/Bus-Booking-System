<?php

namespace App\Http\Livewire\TimeSlotsDetails;

use App\Models\TimeSlot;
use Livewire\Component;

class TimeSlotIndex extends Component
{

    public $timeSlotDetails;

    public function mount(){
        $this->timeSlotDetails = TimeSlot::all();
    }

    public function render()
    {
        return view('livewire.time-slots-details.time-slot-index')->layout('layouts.app');
    }
}
