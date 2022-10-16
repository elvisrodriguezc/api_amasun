<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'document_id',
        'document_number',
        'first_name',
        'last_name',
        'email',
        'phone',
    ];
    use HasFactory;
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
