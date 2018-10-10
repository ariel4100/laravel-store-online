@extends('layouts.appAdmin2')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="login-box-body">
                    <p class="login-box-msg">Editar Usuario</p>
                    <form method="POST" action="{{route('usuarios.update',$user->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <!-- Default input -->
                            <div class="form-group">
                                <label>{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ $user->name }}" required autofocus>
                            </div>
                            <!-- Default input -->
                            <div class="form-group">
                                <label>{{ __('Apellido') }}</label>
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname"  value="{{ $user->surname }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Agregar mas Datos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
                            <form class="box-body">
                                <div class="form-group col-md-4">
                                    <label>Genero: </label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="HOMBRE" {{ $user->gender == 'HOMBRE' ? 'selected' : '' }}>Hombre</option>
                                        <option value="MUJER" {{ $user->gender == 'MUJER' ? 'selected' : '' }}>Mujer</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>{{ __('Fecha de Nacimiento: ') }}</label>
                                    <input type="date" class="form-control" name="nationality" value="{{ $user->nationality }}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Telefono/Cel</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="N°Celular">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Pais</label>
                                    <input type="text" class="form-control" name="country" value="{{ $user->country }}" placeholder="Pais">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control" name="province" value="{{ $user->province }}" placeholder="Ciudad">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Localidad</label>
                                    <input type="text" class="form-control" name="location" value="{{ $user->location }}" placeholder="Localidad">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Dirreccion</label>
                                    <input type="text" class="form-control" name="address" value="{{ $user->address }}" placeholder="Dirreccion">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Perfil del Cliente</label>
                                    <select name="profile_client" id="" class="form-control">
                                        <option value="MINORISTA" {{ $user->gender == 'MINORISTA' ? 'selected' : '' }}>MINORISTA</option>
                                        <option value="MAYORISTA" {{ $user->gender == 'MAYORISTA' ? 'selected' : '' }}>MAYORISTA</option>
                                    </select>
                                </div>
                                <!--<div class="form-group col-md-4">
                                    <label>Dirreccion</label>
                                    <input type="text" class="form-control" placeholder="Dirreccion">
                                </div>-->
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Actualizar Usuario</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </div>
@endsection