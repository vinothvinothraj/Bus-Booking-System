<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class TimeSlot extends Component
{
    public function render()
    {
        return view('livewire.landing-page.time-slot')->layout('layouts.main'); 
    }
}
