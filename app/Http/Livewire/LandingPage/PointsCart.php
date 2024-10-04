<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class PointsCart extends Component
{
    public function render()
    {
        return view('livewire.landing-page.points-cart')->layout('layouts.main'); 
    }
}
