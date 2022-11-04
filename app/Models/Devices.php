<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;

    protected $fillable = [
        'ubicación',
        'clima',
        'distancia',
        'comentario',
        'estado'
    ];

    public function getCreatedAtAttribute($value)
    {
        if (!empty($value)) {
            
            return Carbon::parse($value)->format('d-m-Y - h:i:s A');
        }
    }

    public function getUpdatedAtAttribute($value)
    {
        if (!empty($value)) {

            return Carbon::parse($value)->format('d-m-Y - h:i:s A');
        }
    }
}
