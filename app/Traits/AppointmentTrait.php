<?php

namespace App\Traits;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Setting;
use Carbon\Carbon;

class AppointmentTrait
{

    private $appointment_count;
    private $hours_limit;
    private $appointment_limit;

   
    public function getAvailabilityHours()
    {
        $this->hours_limit = Setting::first()->hours_limit;
    }

    public function getAppointmentCount()
    {
        $this->appointment_count = Appointment::count();
        $this->appointment_limit = Setting::first()->appointment_limit;

    }

    
    public function getAppintmentTime()
    {
        $this->getAppointmentCount();
        $this->getAvailabilityHours();

        //Calculate the time:::

        $hours_limit = $this->hours_limit;
       

    }

    public function getAppintmentDate()
    {
        $nextSaturday = Carbon::now()->next(Carbon::SATURDAY);
        return $nextSaturday->toDateString();
    }
}
