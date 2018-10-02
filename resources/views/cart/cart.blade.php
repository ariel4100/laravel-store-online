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
                                <td>{{ $item->name_pro }} <br>{{ $item->price_pro }} </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Talle</th>
                                            <th>Color</th>
                                            <th>Cantidad</th>
                                            <th>precio</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($option as $data)
                                            @if($item->id_product == $data['id_product'])
                                                <tr>
                                                    <td class="text-center">
                                                       {{ $data['size'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $data['color'] }}
                                                    </td>
                                                    <td style="width: 12rem">
                                                        <form action="{{ route('cart-update',$item->id_product) }}" method="POST">
                                                            @csrf
                                                            <div class="input-group">
                                                                <input type="number" min="1" name="cantidad" max="150" class="form-control text-center" value="{{$data['quantity']}}">
                                                                <div class="input-group-append">
                                                                    <button type="submit" class="btn  btn-outline-primary btn-sm" > <i class="fa fa-refresh"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </td>
                                                    <td>
                                                        {{$item['price_pro'] *  $data['quantity'] }}$
                                                    </td>

                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <a href="{{ route('cart-destroy',$item->id_product) }}" class="btn btn-sm btn-danger">x</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h3>
                        <div class="alert alert-warning">
                            Total: $ {{ number_format( $total,0,',','.')  }} ARG
                        </div>
                    </h3>
                    <div class="my-2">
                        <a href="{{ route('item') }}" class="btn btn-primary btn-lg">seguir comprando</a>
                        <a href="{{ route('cart-order') }}" class="btn btn-success btn-lg">finalizar compra</a>
                    </div>
                @else
                    <div class="alert alert-primary text-center">
                        No hay productos en el carrito...
                    </div>
                    <div class="my-2">
                        <a href="{{ route('item') }}" class="btn btn-primary btn-lg">seguir comprando</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>

        // Update item cart
        $(".btn-update-item").on('click', function(e){
            e.preventDefault();

            var id = $(this).data('id');
            var href = $(this).data('href');
            var quantity = $("#product_" + id).val();

            window.location.href = href + "/" + quantity;
        });
    </script>
@endsection