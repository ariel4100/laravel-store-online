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
                        <input type="hidden" name="idproducto" value="{{$item->id_product}}">
                        <th scope="row">{{$item->id_product}}</th>
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
                                <a href="#modalgalery" class="dropdown-item" id="btngalery" data-toggle="modal">Agregar Galeria</a>
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
        <!--<div class="modal fade" id="modalgalery">
            <div class="modal-dialog modal-notify modal-success">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="heading lead">Galeria de Imagenes</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="lead">Agrege las imagenes que desee relacionadas con el producto!!</p>
                        <form action=" " class="dropzone" method="POST">

                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-success">Get it now <i class="fa fa-diamond ml-1"></i></a>
                        <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--->
@endsection
