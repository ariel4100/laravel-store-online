@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-md-4 mt-2">
                <a href="{{ route('export_color') }}" class="btn btn-success">excel</a>
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
            @foreach($allColor as $item)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">{{$item->name_color}}</h2>
                            <form id="delete-form-{{ $item->id_color }}" action="{{ route('color-delete',$item->id_color) }}" style="display: none;" method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                            <a onclick="if(confirm('estas seguro que desea eliminar??')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $item->id_color }}').submit();
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