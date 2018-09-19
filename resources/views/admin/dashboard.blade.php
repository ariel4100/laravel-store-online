@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>Productos</h2>
                  <p class="lead">{{ $pro }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>Categorias</h2>
                    <p class="lead">{{ $cat }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>Slider</h2>
                    <p>1500</p>
                    <p>100</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            aca van a estar las estadisticas
        </div>
    </div>
</div>
@endsection