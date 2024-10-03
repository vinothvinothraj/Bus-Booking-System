<?php

namespace App\Http\Livewire\BusDetails;

use App\Models\Bus;
use Livewire\Component;

class BusDetailsIndex extends Component
{
    public $busDetails;

    public function mount(){
        $this->busDetails = Bus::all();
    }
    public function render()
    {
        return view('livewire.bus-details.bus-details-index')->layout('layouts.app');
    }
}
