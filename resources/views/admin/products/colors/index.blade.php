@extends('layouts.appAdmin2')

@section('content')
    <section class="content-header">
        <h1>
            Colores del Producto
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#"> Variantes de Producto</a></li>
            <li class="active">Color</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="box box-primary">
                    <div class="box-body">
                        <form action="{{ route('color-create') }}" method="POST" class="border border-dark p-2">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nuevo Color</label>
                                <input type="text" name="name_color" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-bordered">
                            <tr class="active">
                                <th scope="col">#</th>
                                <th scope="col">Color</th>
                                <th scope="col">Estado</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($allColor as $item)
                                <tr>
                                    <th>{{$item->id_color}}</th>
                                    <th>{{$item->name_color}}</th>
                                    <th>{{$item->status_color == 0 ? 'INACTIVO' : 'ACTIVO'}}</th>
                                    <td>
                                        <form id="delete-form-{{ $item->id_color }}" action="{{ route('color-delete',$item->id_color) }}" style="display: none;" method="POST">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <a onclick="if(confirm('estas seguro que desea eliminar??')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $item->id_color }}').submit();
                                                }else{
                                                event.preventDefault();
                                                }" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection