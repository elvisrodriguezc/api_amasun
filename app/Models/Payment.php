<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'booking_id',
        'payment_method_id',
        'card_number',
        'card_holder_name',
        'op_date',
        'op_time',
        'source_id',
        'device_session_id',
        'amount',
        'currency',
        'description',
        'use_card_points'
    ];

    use HasFactory;
    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

}
