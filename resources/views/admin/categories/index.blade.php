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
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="box box-primary">
                    <div class="box-body">
                        <form action="{{ route('category-create') }}" method="POST" class="border border-dark p-2">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nueva Categoria</label>
                                <input type="text" name="name_cat" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Guardar Categoria</button>
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
                                        <form action="{{ route('category-delete',$item->id_category) }}"   method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
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