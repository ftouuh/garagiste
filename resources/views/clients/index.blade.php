@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Clients List</h1>
        <ul>
            @foreach($clients as $client)
                <li>{{ $client->firstName }} {{ $client->lastName }} - {{ $client->address }}</li>
            @endforeach
        </ul>
    </div>
@endsection
