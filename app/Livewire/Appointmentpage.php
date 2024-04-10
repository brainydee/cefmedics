<?php

namespace App\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Livewire\Component;

class Appointmentpage extends Component
{
    public $firstname;
    public $lastname;
    public $appointment_type;
    public $appointment_date;
    public $appointment_time;
    public $address;
    public $reason;

    public function rules()
    {
        return [
            'firstname'         => ['required', 'min:5'],
            'lastname'          => ['required', 'min:5'],
            'appointment_type'  => ['required'],
            'appointment_date'  => ['required'],
            'appointment_time'  => ['required', 'min:5'],
            'address'           => ['required'],
            'reason'            => ['required']
        ];
    }

    public function mount()
    {
        $this->firstname = auth()->user()->firstname;
        $this->lastname  = auth()->user()->lastname;
    }

    public function save()
    {
        try {
            $validated = $this->validate();
            $validated['user_id'] = auth()->user()->id;
            $date = Carbon::createFromFormat('Y-m-d', $this->appointment_date);
            
            if (!$date->isSaturday()) {
                toastr()
                ->progressBar(false)
                ->addError('Appointments can only be made on Saturdays. Kindly select a Saturday on the appointment date field. Thank you');
                return redirect()->back();
            }
            $time = $validated['appointment_time'];
            $available = $this->checkAvailability($time, $validated['appointment_date']);

            if(!$available){
                toastr()
                ->progressBar(false)
                ->addError("Sorry the appointment time {$time} selected is not currently available. Kindly select another appointment time. Thank you");
                return redirect()->back();
            }

            Appointment::create($validated);
            toastr()->addSuccess('Your appointment was succcessful kindly proceed to make payment.');
            return redirect()->route('pay');
        } catch (\Throwable $th) {    
            dd($th->getMessage());    
            toastr()
            ->escapeHtml(false)
            ->addError('<strong>We’re sorry</strong>, but an error occurred.');
        }
      
    }


    public function checkAvailability($time, $date)
    {
        //check if date and time has been booked already::

        $appointment = Appointment::where('appointment_time', $time)->where('appointment_date', $date)->where('active', '1')->first();

        if($appointment){
             return false;
        }
        return true;
    }


    public function render()
    {
        $time_available = ['2:00pm to 3:30pm', '3:30pm  to 5:00pm'];
        return view('livewire.appointmentpage', ['time_available' => $time_available])->layout('layouts.real');
    }
}
