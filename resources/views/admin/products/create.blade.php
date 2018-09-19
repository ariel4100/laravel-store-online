@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Default form contact -->
                <p class="h4 mt-4 text-center">Nuevo Producto</p>
                <form class="border border-light p-5" action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label>Nombre del producto</label>
                        <input type="text" name="name_pro" class="form-control" placeholder="Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="browser-default custom-select" name="category">
                            @foreach($allCat as $item)
                                <option value="{{$item->id_category}}" selected>{{$item->name_cat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Talles</label>
                        <select class="browser-default custom-select select2" multiple="multiple" name="size[]">
                            @foreach($allSize as $item)
                                <option value="{{$item->id_size}}" selected>{{$item->letter == null ? $item->number : $item->letter}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Colores</label>
                        <!--<select name="id_categoria[]" id="id_padre" class="form-control select2" multiple="multiple" style="width: 100%" required>-->
                        <select class="form-control select2" multiple="multiple" name="color[]">
                            @foreach($allColor as $item)
                                <option value="{{$item->id_color}}" selected>{{$item->name_color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="price_pro" class="form-control mb-4" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <label>Cantidad del Producto</label>
                        <input type="text" name="quantity_pro" class="form-control mb-4" placeholder="cantidad">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">subir</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="image_pro" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">imagen</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select class="browser-default custom-select mb-4" name="status_pro">
                            <option  selected>ACTIVO</option>
                            <option  selected>INACTIVO</option>
                            <option  selected>PAUSA</option>
                        </select>
                    </div>
                    <button class="btn btn-info btn-block" type="submit">Send</button>
                    <a href="{{ route('productos.index') }}" class="btn btn-dark">Volver atras</a>
                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
@endsection