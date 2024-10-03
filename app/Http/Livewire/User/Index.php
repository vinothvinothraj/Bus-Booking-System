<?php

namespace App\Http\Livewire\User;

use App\Models\UserInformation;
use Livewire\Component;

class Index extends Component
{

    public $userDetails;

    public function mount(){
        $this->userDetails = UserInformation::all();
    }
    public function render()
    {
        return view('livewire.user.index')->layout('layouts.app');
    }
}
