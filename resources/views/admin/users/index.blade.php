@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>usuarios</h2>
                        <p>1500</p>
                        <p>100</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo usuario</a>
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
@endsection