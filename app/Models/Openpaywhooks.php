<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Openpaywhooks extends Model
{
    protected $fillable = [
        'type',
        'event_date',
        'verification_code',
    ];
    use HasFactory;
}
