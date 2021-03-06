@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>productos</h2>
                        <p>1500</p>
                        <p>100</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form action="{{ route('product_filter') }}" method="GET">
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
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('productos.create') }}" class="btn btn-success">+ Nuevo Producto</a>
                <a href="{{ route('export_product') }}" class="btn btn-success">excel</a>
                <table class="table">
                    <thead class="black white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">categoria</th>
                        <th scope="col">precio</th>
                        <th scope="col">cantidad</th>
                        <th scope="col">estado</th>
                        <th scope="col">acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pro as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/Products/'.$item->image_pro) }}" style="height: 100px; width: 100px" alt=""></td>
                        <td>{{$item->name_pro}}</td>
                        <td>{{$item->category->name_cat}}</td>
                        <td>{{$item->price_pro}}</td>
                        <td>{{$item->quantity_pro}}</td>
                        <td><p class="badge badge-info">{{$item->status_pro}}</p></td>
                        <td>
                            <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown">ver opciones</button>
                            <div class="dropdown-menu">
                                <a href="{{ route('productos.edit',$item->id_product) }}" class="dropdown-item">Editar</a>
                                <a href="" class="dropdown-item">Agregar Galeria</a>
                                <form id="delete-form-{{ $item->id_product }}" action="{{ route('productos.destroy',$item->id_product) }}" style="display: none;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a class="dropdown-item" onclick="if(confirm('Are you sure? You want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $item->id_product }}').submit();
                                        }else {
                                        event.preventDefault();
                                        }">Eliminar</a>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $pro->render() }}
            </div>
        </div>
    </div>
@endsection