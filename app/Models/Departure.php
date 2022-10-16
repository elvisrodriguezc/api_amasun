<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{

    protected $fillable = [
        'user_id',
        'boat_id',
        'service_id',
        'location_id',
        'depart_date',
        'depart_time',
        'seats_enable',
        'duration',
        'price_adult',
        'price_child',
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
