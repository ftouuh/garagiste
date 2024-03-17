@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vehicules List</h1>
        <ul>
            @foreach($vehicules as $v)
                <li>{{ $v->make }} {{ $v->model }} - {{ $v->fuelType }} - {{ $v->registration }} - {{ $v->clientID }}</li>
            @endforeach
        </ul>
    </div>
@endsection
