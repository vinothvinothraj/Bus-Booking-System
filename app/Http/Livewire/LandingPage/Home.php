<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        // Return the view without using Blade @extends directives.
        return view('livewire.landing-page.home')
            ->layout('layouts.main');  // Apply the layout here
    }
}
