<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
    
        $role = $validatedData['role'];
        $isUser = $role === 'user' ? true : false;
        $isMechanicien = $role === 'mechanicien' ? true : false;
        $isAdmin = false;
    
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'isUser' => $isUser,
            'isMechanicien' => $isMechanicien,
            'isAdmin' => $isAdmin,
        ]);
    
        auth()->login($user);
    
        return redirect('/')->with('success', "Account successfully registered.");
    }
    
}
