@extends('layouts.app')
@section('style')
    <style>
        .pedido {
            background-color: #f0f0f0;
        }
    </style>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 ml-auto">
            <h2 class="mt-4">NUEVOS CLIENTES</h2>
            <hr>
            <p class="align-items-center">
                Bienvenido a CR Tienda Argentina. Registrate y sé parte de nuestra tienda de modo online.</p>
            <div class="card text-white mb-5" style="background-color: rgba(0,0,0,0.7);">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <!-- Default input -->
                            <div class="form-group col-md-6">
                                <label>{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- Default input -->
                            <div class="form-group col-md-6">
                                <label>{{ __('Apellido') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label>{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('Confirma tu Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label>Genero: </label>
                                <select name="" id="" class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                    <option value="">Hombre</option>
                                    <option value="">Mujer</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('Fecha de Nacimiento: ') }}</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
