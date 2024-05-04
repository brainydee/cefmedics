<?php

namespace App\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Appointmentpage extends Component
{
    use WithFileUploads;

    public $firstname;
    public $lastname;
    public $appointment_type;
    public $appointment_date;
    public $appointment_time;
    public $address;
    public $reason;
    public $file;

    public function rules()
    {
        return [
            'firstname'         => ['required'],
            'lastname'          => ['required'],
            'appointment_type'  => ['required'],
            'appointment_date'  => ['required'],
            'appointment_time'  => ['required', 'min:5'],
            'address'           => ['required'],
            'reason'            => ['required'],
            'file'              => ['nullable', 'file', 'max:2048'], 
        ];
    }

    public function mount()
    {
        $this->firstname = auth()->user()->firstname;
        $this->lastname  = auth()->user()->lastname;
    }

    public function save()
    {
        $validated = $this->validate();
        try {

            $path = $this->file->store('files');

            DB::beginTransaction();

            $validated['user_id'] = auth()->user()->id;
            $validated['file_path'] = $path;
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
            $validated['appointment_date'] = Carbon::parse($validated['appointment_date'])->format('d-m-Y');
            Appointment::create($validated);
            DB::commit();
            toastr()->addSuccess('Your appointment was succcessful kindly proceed to make payment.');
            return redirect()->route('pay');
        } catch (\Throwable $th) {  
            DB::rollBack();   
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
