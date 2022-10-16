<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'location_id',
        'name',
        'duration',
        'image',
        'price_adult',
        'price_child',
        'about',
        'includes',
        'recommendations',
        'status',
    ];
    use HasFactory;
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
