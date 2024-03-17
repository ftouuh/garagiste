<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'password' => Hash::make('password'), // Default password 'password'
            'email' => $this->faker->email,
            'isUser' => $this->faker->boolean(50),
            'isMechanicien' => $this->faker->boolean(10),
            'isAdmin' => $this->faker->boolean(5),
        ];
    }
}
