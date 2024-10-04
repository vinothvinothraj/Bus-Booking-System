<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Laravel\Jetstream\InteractsWithBanner;

class ServiceCreate extends Component
{
    use InteractsWithBanner;

    public $name;
    public $price_per_seat;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price_per_seat' => 'required|numeric',
        'description' => 'required|string|max:255', 
    ];

    public function submitForm()
    {
        $this->validate();

        $service = Service::create([
            'name' => $this->name,
            'price_per_seat' => $this->price_per_seat,
            'description' => $this->description,
        ]);
        $this->banner('Service Created Successfully');
        $this->resetForm();
        return redirect('/services');
        
    }

    public function goBack()
    {
        return redirect('/services');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->price_per_seat = '';
        $this->description = '';

        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.services.service-create')->layout('layouts.app');
    }
}
