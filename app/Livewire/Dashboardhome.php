<?php

namespace App\Livewire;

use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboardhome extends Component
{

    public $test_results;
    public $total_appointments;
    
    public function mount()
    {
        $this->test_results = auth()->user()->appointments->whereNotNull('file_path')->count();
        $this->total_appointments = Appointment::count();
    }

    public function render()
    {
        $earnings = DB::table('payments')
                ->where('status', 'success')
                ->select(DB::raw('SUM(amount) as total_earnings'))
                ->groupBy('status')
                ->first();
        return view('livewire.dashboardhome', ['earnings' => $earnings])->layout('dashboard.layout.app');
    }
}
