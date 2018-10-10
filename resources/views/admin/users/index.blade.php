@extends('layouts.appAdmin2')

@section('content')
    <section class="content-header">
        <h1>Listado de Clientes</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Clientes</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <form action="{{ route('product_filter') }}" method="GET" class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Buscar por Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="category" class="form-control" placeholder="Buscar por Categoria">
                        </div>
                        <div class="form-group">
                            <input type="text" name="status" class="form-control" placeholder="Buscar por Estado">
                        </div>
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo usuario</a>
                    <a href="{{ route('export_user') }}" class="btn btn-success">excel</a>
                </div>
                <div class="box-body table-responsive no-padding table-bordered">
                    <table class="table table-bordered table-hover">
                        <thead class="black white-text">
                            <tr class="active">
                                <th scope="col">#</th>
                                <th scope="col">Nombre y Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Perfil del Cliente</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name.' '.$item->surname}}</td>
                                <td><p class="badge badge-info">{{$item->email}}</p></td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->profile_client}}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit',$item->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('usuarios.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Are you sure? You want to delete this?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection