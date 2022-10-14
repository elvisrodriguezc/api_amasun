<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $fillable = [
        'location_id',
        'name',
        'seatscount',
        'price_adult',
        'price_child',
        'image',
        'status',
    ];
    use HasFactory;
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
