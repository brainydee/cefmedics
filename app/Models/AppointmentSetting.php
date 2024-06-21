<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentSetting extends Model
{
    use HasFactory;

    protected $fillable  = ['day_of_week', 'start_time', 'end_time', 'session_limit'];


    protected function startTime():Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('g:i A'),
            set: fn (string $value) => Carbon::parse($value)->format('H:i'),
        );
    }

    protected function dayOfWeek():Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucfirst($value),
        );
    }

    protected function endTime():Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('g:i A'),
            set: fn (string $value) => Carbon::parse($value)->format('H:i'),
        );
    }


}
