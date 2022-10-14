<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{

    protected $fillable = [
        'departure_id',
        'customer_id',
        'date',
        'time',
        'payment_code',
        'payment_datetime',
        'adults',
        'childs',
        'status'
    ];

     use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
