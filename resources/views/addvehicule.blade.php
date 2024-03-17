@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Vehicle') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('vehicules.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>
                                <div class="col-md-6">
                                    <input id="make" type="text" class="form-control @error('make') is-invalid @enderror" name="make" value="{{ old('make') }}" required autocomplete="make" autofocus>
                                    @error('make')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>
                                <div class="col-md-6">
                                    <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model">
                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fuelType" class="col-md-4 col-form-label text-md-right">{{ __('Fuel Type') }}</label>
                                <div class="col-md-6">
                                    <input id="fuelType" type="text" class="form-control @error('fuelType') is-invalid @enderror" name="fuelType" value="{{ old('fuelType') }}" required autocomplete="fuelType">
                                    @error('fuelType')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="registration" class="col-md-4 col-form-label text-md-right">{{ __('Registration') }}</label>
                                <div class="col-md-6">
                                    <input id="registration" type="text" class="form-control @error('registration') is-invalid @enderror" name="registration" value="{{ old('registration') }}" required autocomplete="registration">
                                    @error('registration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="clientID" class="col-md-4 col-form-label text-md-right">{{ __('Client ID') }}</label>
                                <div class="col-md-6">
                                    <input id="clientID" type="text" class="form-control @error('clientID') is-invalid @enderror" name="clientID" value="{{ old('clientID') }}" required autocomplete="clientID">
                                    @error('clientID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Vehicle') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
