<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create()
    {
        return view('addclient');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
        ]);

        Client::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);
    }
}
