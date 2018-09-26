@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-md-4 mt-2">
                <a href="{{ route('export_size') }}" class="btn btn-success">excel</a>
                <form action="{{ route('size-create') }}" method="POST" class="border border-dark p-2">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="name">Letras</label>
                        <input type="text" name="letter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Numeros</label>
                        <input type="text" name="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-block btn-success">Guardar</button>
                </form>
            </div>
            @foreach($allSize as $item)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">{{$item->letter == null ? $item->number : $item->letter }}</h2>
                            <form id="delete-form-{{ $item->id_size }}" action="{{ route('size-delete',$item->id_size) }}" style="display: none;" method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                            <a onclick="if(confirm('estas seguro que desea eliminar??')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $item->id_size }}').submit();
                                    }else{
                                    event.preventDefault();
                                    }" class="btn btn-danger btn-block">Eliminar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection