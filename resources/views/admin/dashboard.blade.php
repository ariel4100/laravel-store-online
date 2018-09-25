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
        <div class="col-md-6">
            <canvas id="myChart" style="max-width: 500px;"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="pieChart"></canvas>
        </div>
    </div>
</div>
@endsection