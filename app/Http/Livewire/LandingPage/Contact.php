<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.landing-page.contact')->layout('layouts.main'); 
    }
}
