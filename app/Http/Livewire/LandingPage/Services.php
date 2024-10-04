<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.landing-page.services')->layout('layouts.main'); 
    }
}
