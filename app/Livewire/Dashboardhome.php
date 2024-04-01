<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboardhome extends Component
{
    public function render()
    {
        return view('livewire.dashboardhome')->layout('dashboard.layout.app');
    }
}
