<?php

namespace App\Http\Livewire\PointsSytem;

use App\Models\Point;
use Livewire\Component;

class PointsIndex extends Component
{

    public $pointsDetails;

    public function mount(){
        $this->pointsDetails = Point::all();
    }
    public function render()
    {
        return view('livewire.points-sytem.points-index')->layout('layouts.app');
    }
}
