@extends('layouts.appAdmin2')

@section('content')
    <section class="content-header">
        <h1>
            Categoria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Categoria</li>
        </ol>
    </section>
    <div class="content">
        <a href="{{ route('categorias.create') }}" class="btn btn-success">Nueva Categoria</a>
        <a href="{{ route('export_category') }}" class="btn btn-success">excel</a>
        <div class="row my-4">
            @foreach($allCat as $item)
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <h2>{{$item->name_cat}}</h2>
                        <p>1500</p>
                        <p>100</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Estado</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($allCat as $item)
                                <tr>
                                    <th>{{$item->id_category}}</th>
                                    <th>{{$item->name_cat}}</th>
                                    <th></th>
                                    <td>
                                        <form id="delete-form-{{ $item->id_category }}" action="{{ route('size-delete',$item->id_category) }}" style="display: none;" method="POST">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <a onclick="if(confirm('estas seguro que desea eliminar??')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $item->id_category }}').submit();
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