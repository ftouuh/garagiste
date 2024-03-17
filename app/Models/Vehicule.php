<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'make',
        'model',
        'fuelType',
        'registration',
        'clientID',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
