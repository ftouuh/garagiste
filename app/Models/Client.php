<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'address',
        'phoneNumber',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vehicule()
    {
        return $this->hasMany(Vehicule::class);
    }
}