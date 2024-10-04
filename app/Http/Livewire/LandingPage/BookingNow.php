<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class BookingNow extends Component
{
    public function render()
    {
        return view('livewire.landing-page.booking-now')->layout('layouts.main');
    }
}
