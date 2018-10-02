@extends('layouts.app')
@section('style')
    <style>
        .pedido {
            background-color: #f0f0f0;
        }
    </style>
@endsection
@section('content')
    <section class="container pt-3">
        <div class="jumbotron">
            <h1 class="text-info"><b>Confirmar Pedido</b></h1>
            <hr class="my-4 bg-info">
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
            <table class="table table-bordered">
                <thead class="grey lighten-2">
                <tr>
                    <th style="width: 10px">N°Producto</th>
                    <th>Producto</th>
                    <th style="width:100px;">P.U</th>
                    <th style="width:100px;">Detalle del Pedido</th>

                </tr>
                </thead>

                <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td class="text-center">#00{{ $item->id_product }}</td>
                        <td>{{ $item->name_pro }}</td>
                        <td  class="text-center">
                            {{ number_format($item->price_pro,2)}}$
                        </td>
                        <td>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Talle</th>
                                    <th>Color</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
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
                                            <td class="text-center">
                                                {{$data['quantity']}}
                                            </td>
                                            <td>
                                                {{ number_format($item->price_pro * $data['quantity'],0,',','.') }}$
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-right"><b>Cantidad Total: </b></td>
                    <td class="text-right"> {{ $totqty }}</td>
                </tr>

                <tr>
                    <td colspan="3" class="text-right"><b>Precio Total: </b></td>
                    <td class="text-right">$ {{ number_format($total,0,',','.') }} (ARG)</td>
                </tr>
                </tfoot>
            </table>
            <h4 class="text-info">Elija una alternativa de Entrega</h4>
            <form action="">
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="entrega" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Retiro personalmente</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="entrega" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Flete en GBA-CABA <b>!!Gratis!! $</b></label>
                </div>
                <p class="  my-4">Recuerde que un representante de CR Tienda se contactara con usted para confirmar dichas fechas, asi mismo los pedidos tienen un minimo de preparación de 24hs.<br>
                    Nota: estos importes son orientativos y referenciales, el importe correcto a abonar será dado por la factura de compra. Gracias!
                </p>
                <button type="submit" class="btn btn-primary btn-lg">Confirmar Pedido</button>
            </form>
        </div>
    </section>
@endsection