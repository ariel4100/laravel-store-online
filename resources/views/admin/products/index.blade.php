@extends('layouts.appAdmin2')

@section('content')
    <section class="content-header">
        <h1>Listado de Productos</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Productos</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $proTotal }}</h3>

                        <p>Total Productos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
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
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('productos.create') }}" class="btn btn-success">+ Nuevo Producto</a>
                        <a href="{{ route('export_product') }}" class="btn btn-success">excel</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding ">
                        <table class="table table-hover table-bordered">
                            <tr class="active">
                                <th scope="col">#</th>
                                <th scope="col">imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">categoria</th>
                                <th scope="col">precio</th>
                                <th scope="col">cantidad</th>
                                <th scope="col">estado</th>
                                <th scope="col">acciones</th>
                            </tr>
                            @foreach($pro as $item)
                                <tr>
                                    <input type="hidden" name="idproducto" value="{{$item->id_product}}">
                                    <th scope="row">{{$item->id_product}}</th>
                                    <td><img class="img-responsive " src="{{ asset('uploads/Products/'.$item->image_pro) }}" style="height: 50px; width: 50px"  ></td>
                                    <td>{{$item->name_pro}}</td>
                                    <td>{{$item->category->name_cat}}</td>
                                    <td>{{$item->price_pro}}</td>
                                    <td>{{$item->quantity_pro}}</td>
                                    <td><span class="label label-success">{{$item->status_pro}}</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Editar</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ route('productos.edit',$item->id_product) }}" class="dropdown-item">Editar</a></li>
                                                <li><a href="#modalgalery" class="dropdown-item" id="btngalery" data-toggle="modal">Agregar Galeria</a></li>
                                                <li><form id="delete-form-{{ $item->id_product }}" action="{{ route('productos.destroy',$item->id_product) }}" style="display: none;" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a class="dropdown-item" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $item->id_product }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }">Eliminar</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">otro</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $pro->render() }}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <div class="container">

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
