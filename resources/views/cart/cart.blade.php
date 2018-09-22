@extends('layouts.app')

@section('content')
    <section class="container    my-5 pt-3">
        <h2 class="h1-responsive font-weight-bold text-center my-5"><u>¡Carrito de Compras!</u></h2>
        <div class="row">
            <div class="col-md-12">
                @if(count($cart))
                    <table class="table">
                        <thead class="table-dark">
                        <tr>
                            <th>codigo</th>
                            <th>imagen</th>
                            <th>producto</th>
                            <th>variantes</th>
                            <th>total precio</th>
                            <th>eliminar fila</th>
                        </tr>
                        </thead>
                        <tbody>
                        <pre>

                        </pre>
                        <hr>
                        @foreach($cart as $item)
                            <tr>
                                <th scope="row">{{ $item['id_product'] }}</th>
                                <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/Products/'.$item['image_pro']) }}" style="height: 100px; width: 100px" alt=""></td>
                                <td>{{ $item->name_pro }} <br>{{ $item['price_pro'] }} </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Talle</th>
                                            <th>Color</th>
                                            <th>Cantidad</th>
                                            <th>precio</th>
                                            <th>sacar fila</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($option as $data)
                                            @if($item['id_product'] == $data['id_product'])
                                                <tr>
                                                    <td>
                                                        @foreach($data['size'] as $d)
                                                            {{ $d }}
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach($data['color'] as $d)
                                                            {{ $d }}
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{$data['quantity'] }}
                                                    </td>
                                                    <td>
                                                        {{$item['price_pro'] * ( $data['quantity'] * count($data['size'])) }}$
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-danger">x</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm">x</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h3>
                        <div class="alert alert-warning">
                            Total: $ {{ $total }}
                        </div>
                    </h3>
                    <div class="my-2">
                        <a href="{{ route('item') }}" class="btn btn-primary btn-lg">seguir comprando</a>
                        <a href=" " class="btn btn-success btn-lg">finalizar compra</a>
                    </div>
                @else
                    <div class="alert alert-primary text-center">
                        No hay productos en el carrito :)
                    </div>
                    <div class="my-2">
                        <a href="{{ route('item') }}" class="btn btn-primary btn-lg">seguir comprando</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
