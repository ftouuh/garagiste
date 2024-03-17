<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'password',
        'email',
        'isUser',
        'isMechanicien',
        'isAdmin'
    ];

    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
