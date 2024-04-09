<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $casts = ['active' => 'boolean'];

    protected $fillable = [
        'payment_status',
        'status',
        'message',
        'payment_data_id',
        'domain',
        'reference',
        'paid_at',
        'channel',
        'currency',
        'receipt_number',
        'amount',
        'gateway_response',
        'ip_address',
        'fees',
        'authorization_code',
        'bin',
        'last4',
        'exp_month',
        'exp_year',
        'card_type',
        'bank',
        'country_code',
        'brand',
        'reusable',
        'signature',
        'brand',
        'account_name',
        'receiver_bank_account_number',
        'receiver_bank',
        'customer_firstname',
        'customer_lastname',
        'customer_email',
        'customer_code',
        'phone',
        'transaction_date',
        'user_id',
        'appointment_id',
        'active'
    ];
 

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function appointment():BelongsTo
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
    
}
