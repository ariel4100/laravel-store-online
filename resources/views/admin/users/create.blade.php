@extends('layouts.appAdmin2')

@section('content')
    <div class="content">
        <div class="row">
            <form method="POST" action="{{ route('usuarios.store') }}">
                <div class="col-md-3">
                    <div class="login-box-body">
                        <p class="login-box-msg">Registrar Nuevo Usuario</p>
                        <div class="form-row">
                            <!-- Default input -->
                            <div class="form-group">
                                <label>{{ __('Nombre') }}</label>
                                <input  type="text" class="form-control" name="name" required autofocus>
                            </div>
                            <!-- Default input -->
                            <div class="form-group">
                                <label>{{ __('Apellido') }}</label>
                                <input type="text" class="form-control" name="surname" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                    </div>
                </div>
                @method('POST')
                @csrf
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#settings" data-toggle="tab">Agregar mas Datos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="settings">
                                <div class="box-body">
                                    <div class="form-group col-md-4">
                                        <label>Genero: </label>
                                        <select name="gender" id="" class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                            <option value="HOMBRE">Hombre</option>
                                            <option value="MUJER">Mujer</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Fecha de Nacimiento: ') }}</label>
                                        <input type="date" class="form-control" name="nationality" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Telefono/Cel</label>
                                        <input type="text" class="form-control" name="phone"  placeholder="N°Celular">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Pais</label>
                                        <input type="text" class="form-control" name="country" placeholder="Pais">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Provincia</label>
                                        <input type="text" class="form-control" name="province"  placeholder="Ciudad">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Localidad</label>
                                        <input type="text" class="form-control" name="location" placeholder="Localidad">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Dirreccion</label>
                                        <input type="text" class="form-control" name="address" placeholder="Dirreccion">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Perfil del Cliente</label>
                                        <select name="profile_client" id="" class="form-control">
                                            <option value="MINORISTA" selected>MINORISTA</option>
                                            <option value="MAYORISTA">MAYORISTA</option>
                                        </select>
                                    </div>
                                    <!--<div class="form-group col-md-4">
                                        <label>Dirreccion</label>
                                        <input type="text" class="form-control" placeholder="Dirreccion">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>--->
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
            </form>
        </div>
    </div>
@endsection