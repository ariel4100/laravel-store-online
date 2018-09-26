@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <a href="{{ route('categorias.create') }}" class="btn btn-success">Nueva Categoria</a>
        <a href="{{ route('export_category') }}" class="btn btn-success">excel</a>
        <div class="row my-4">
            @foreach($allCat as $item)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{$item->name_cat}}</h2>
                        <p>1500</p>
                        <p>100</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection