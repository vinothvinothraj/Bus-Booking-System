<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.landing-page.about')->layout('layouts.main'); 
    }
}
