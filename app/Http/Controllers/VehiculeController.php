<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;

class VehiculeController extends Controller
{
    public function create()
    {
        return view('addvehicule');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'fuelType' => 'required|string|max:255',
            'registration' => 'required|string|max:255',
            'clientID' => 'required|exists:clients,id',
        ]);

        Vehicule::create([
            'make' => $request->make,
            'model' => $request->model,
            'fuelType' => $request->fuelType,
            'registration' => $request->registration,
            'clientID' => $request->clientID,
        ]);

        return redirect()->route('vehicules.index')->with('success', 'Vehicle added successfully!');
    }
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicules.index', ['vehicules' => $vehicules]);
    }
}
