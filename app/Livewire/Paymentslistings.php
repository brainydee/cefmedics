<?php

namespace App\Livewire;

use App\Models\Payment;
use Livewire\Component;

class Paymentslistings extends Component
{
    public function render()
    {
        $paymentsQuery = Payment::query();
        $payments     = $paymentsQuery->simplePaginate(10);
        return view('livewire.paymentslistings', ['payments' => $payments])->layout('dashboard.layout.app');
    }
}
