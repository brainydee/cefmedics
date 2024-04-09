<?php

namespace App\Livewire;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;

class Appointments extends Component
{
    use WithPagination;

    public function render()
    {
        $appointmentsQuery = auth()->user()->user_type == 'Admin' ? Appointment::query() : auth()->user()->appointments();

        $appointments = $appointmentsQuery->simplePaginate(10);
        return view('livewire.appointments', ['appointments' => $appointments])->layout('dashboard.layout.app');
    }
}
