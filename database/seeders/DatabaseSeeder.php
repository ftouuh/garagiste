<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'email' => 'admin@example.com',
                'isUser' => false,
                'isMechanicien' => false,
                'isAdmin' => true,
            ],
        ];

        User::insert($users);
        $clients = [
            [
                'firstName' => 'Zayd',
                'lastName' => 'Ftouh',
                'address' => 'gharabo',
                'phoneNumber' => '0610462095',
                'user_id' => User::where('username', 'clientuser')->value('id'),
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'firstName' => 'Jihad',
                'lastName' => 'Bourbab',
                'address' => 'wilaya',
                'phoneNumber' => '0617729768',
                'user_id' => User::where('username', 'clientuser')->value('id'),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ];

        Client::insert($clients);
    }
}
