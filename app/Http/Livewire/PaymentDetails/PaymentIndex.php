<?php

namespace App\Http\Livewire\PaymentDetails;

use App\Models\Payment;
use Livewire\Component;

class PaymentIndex extends Component
{

    public $paymentDetails;

    public function mount(){
        $this->paymentDetails = Payment::all();
    }
    public function render()
    {
        return view('livewire.payment-details.payment-index')->layout('layouts.app');
    }
}
