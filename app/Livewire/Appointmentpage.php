<?php

namespace App\Livewire;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\AppointmentTrait;

class Appointmentpage extends Component
{
    use WithFileUploads, AppointmentTrait;

    public $firstname;
    public $lastname;
    public $appointment_type;
    public $appointment_date;
    public $appointment_time;
    public $address;
    public $reason;
    public $file;
    public $selected_day;
    public $available_time = [];
    private $available_days =  ['Friday', 'Saturday', 'Sunday'];

    public function rules()
    {
        return [
            'firstname'         => ['required'],
            'lastname'          => ['required'],
            'appointment_type'  => ['required'],
            'appointment_date'  => ['required'],
            'appointment_time'  => ['nullable'],
            'address'           => ['required'],
            'reason'            => ['required'],
            'file'              => ['nullable', 'file', 'max:2048'], 
        ];
    }


    public function updated($value){
        if($value == 'appointment_date'){
            $this->available_time = $this->fetchAvailableDaysAndTime($this->appointment_date);
            $this->selected_day = $this->getSelectedDay($this->appointment_date);
        }
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
            $path = null;
            if($this->file){
                $path = $this->file->store('files');
            }
           

            DB::beginTransaction();

            $validated['user_id'] = auth()->user()->id;
            $validated['file_path'] = $path;
            $date = Carbon::createFromFormat('Y-m-d', $this->appointment_date);
            $time = $validated['appointment_time'];

            $available_day = in_array($this->selected_day, $this->available_days);

            //check if day selected is valid

            if(!$available_day){
                toastr()
                ->progressBar(false)
                ->addError("Appointments cannot be booked on {$this->selected_day} kindly check the available days and select an appointment time . Thank you");
                return redirect()->back();
            }

            //check if day and time is available and not booked::

            $time_date_available = $this->checkAvailability($time, $validated['appointment_date']);

            if(!$time_date_available){
                toastr()
                ->progressBar(false)
                ->addError("Sorry the appointment time {$time} selected is not currently available. Kindly select another appointment time or check other available days. Thank you");
                return redirect()->back();
            }
         
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
        $appointment = Appointment::where('appointment_time', $time)->where('appointment_date', $date)->where('active', true)->first();

        if($appointment){
             return false;
        }
        return true;
    }


    public function render()
    {
        return view('livewire.appointmentpage')->layout('layouts.real');
    }
}
