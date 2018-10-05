@extends('layouts.appAdmin2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Default form contact -->
                <p class="h4 mt-4 text-center">Editar Producto</p>
                <form class="border border-light p-5" action="{{route('productos.update',$pro->id_product)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Nombre del producto</label>
                        <input type="text"  value="{{ $pro->name_pro }}" name="name_pro" class="form-control" placeholder="Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="browser-default custom-select" name="category">
                            @foreach($allCat as $item)
                                <option {{$item->id_category == $pro->category_id_pro ? 'selected' : ''}} value="{{$item->id_category}}">{{$item->name_cat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" value="{{ $pro->price_pro }}" name="price_pro" class="form-control mb-4" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <label>Cantidad del Producto</label>
                        <input type="text" value="{{ $pro->quantity_pro }}" name="quantity_pro" class="form-control mb-4" placeholder="cantidad">
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
                            <option {{ $pro->status_pro == 'ACTIVO' ? 'selected' : '' }}>ACTIVO</option>
                            <option {{ $pro->status_pro == 'INACTIVO' ? 'selected' : '' }}>INACTIVO</option>
                            <option {{ $pro->status_pro == 'PAUSA' ? 'selected' : '' }}>PAUSA</option>
                        </select>
                    </div>
                    <button class="btn btn-info btn-block" type="submit">Actualizar</button>
                    <a href="{{ route('productos.index') }}" class="btn btn-dark">Volver atras</a>
                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
@endsection