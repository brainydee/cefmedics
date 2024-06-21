<?php

namespace App\Traits;
use Carbon\Carbon;
use App\Models\AppointmentSetting;


trait AppointmentTrait
{
    protected function fetchAvailableDaysAndTime($date)
    {
        $carbonDate = Carbon::parse($date);
        $day = $carbonDate->format('l');
        $data = AppointmentSetting::select(['start_time', 'end_time', 'day_of_week'])->where('day_of_week', $day)->get();
        if(count($data) === 0){
            return null;
        }
        return $data;
    }
   

    protected function getSelectedDay($date)
    {
        $carbonDate = Carbon::parse($date);
        $day = $carbonDate->format('l');
        return $day;
    }


    protected function getAvailableDays()
    {
        return ['Friday', 'Saturday', 'Sunday'];
    }
}
