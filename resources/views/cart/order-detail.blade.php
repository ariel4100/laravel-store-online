@extends('partials.app')
@section('content')
    <section class="container my-5 pt-3">
        <div class="jumbotron">
            <h1 class="text-center"><b>DETALLES DEL PEDIDO</b></h1>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li class="list-inline-item"><b>Nombre:</b></li>
                        <li class="list-inline-item">{{Auth::user()->name}}</li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item"><b>Email:</b></li>
                        <li class="list-inline-item">{{Auth::user()->email}}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li class="list-inline-item"><b>Nª:</b></li>
                        <li class="list-inline-item">00{{Auth::user()->id}}</li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item"><b>Fecha de emision:</b></li>
                        <li class="list-inline-item">{{Auth::user()->created_at}}</li>
                    </ul>
                </div>
            </div>
            <hr>
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>codigo</th>
                    <th>titulo</th>
                    <th>precio</th>
                    <th>cantidad</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>${{number_format($item->price,2,',','.')}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>${{number_format($item->price * $item->quantity,2,',','.')}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h3>
                <div class="alert alert-secondary text-center">
                    Total: ${{number_format($total,2,',','.')}}
                </div>
            </h3>
        </div>
        <a href="{{ route('carrito.order-save') }}" class="btn btn-primary btn-lg">Confirmar Pedido</a>
    </section>
@endsection