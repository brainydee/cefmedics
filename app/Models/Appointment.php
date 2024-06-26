<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'firstname', 'lastname', 'appointment_type', 'appointment_date', 'appointment_time', 'address', 'reason', 'active', 'file_path', 'is_completed'];

    protected $casts = [
        'active' => 'boolean',
        'is_completed' => 'boolean'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
