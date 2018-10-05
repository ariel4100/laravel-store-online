@extends('layouts.appAdmin2')

@section('content')
    <section class="content-header">
        <h1>
            Clientes
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Clientes</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <form action="{{ route('product_filter') }}" method="GET">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Buscar por Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="category" class="form-control" placeholder="Buscar por Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="status" class="form-control" placeholder="Buscar por Estado">
                    </div>
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo usuario</a>
                    <a href="{{ route('export_user') }}" class="btn btn-success">excel</a>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table">
                        <thead class="black white-text">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">email</th>
                            <th scope="col">acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td><p class="badge badge-info">{{$item->email}}</p></td>
                                <td>
                                    <a href="{{ route('usuarios.edit',$item->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('usuarios.destroy',$item->id) }}" style="display: none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $item->id }}').submit();
                                            }else {
                                            event.preventDefault();
                                            }">Eliminar</button>
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