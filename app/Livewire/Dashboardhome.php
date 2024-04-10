<?php

namespace App\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class Dashboardhome extends Component
{

    public $test_results;

    public function mount()
    {
        $this->test_results = auth()->user()->appointments->whereNotNull('file_path')->count();
    }

    public function render()
    {
        return view('livewire.dashboardhome')->layout('dashboard.layout.app');
    }
}
