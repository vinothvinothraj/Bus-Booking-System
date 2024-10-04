<?php

namespace App\Http\Livewire\BookingDetails;

use App\Models\Booking;
use Livewire\Component;

class BookingIndex extends Component
{

    public $bookingDetails;

    public function mount(){
        $this->bookingDetails = Booking::all();
    }
    public function render()
    {
        return view('livewire.booking-details.booking-index')->layout('layouts.app');
    }
}
