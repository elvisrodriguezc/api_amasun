<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'document_id',
        'document_number',
        'country_code',
        'phone',
        'email',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'address',
        'remark'
    ];
    use HasFactory;
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }
}
